<?php


ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

error_reporting(0);
session_start();
include ('authenticate.php');

$uid = strip_tags($_SESSION['uid3']);
$userid = $uid;
$fullname = strip_tags($_SESSION['fullname3']);
$username =  strip_tags($_SESSION['username3']);
$photo = strip_tags($_SESSION['photo3']);
$email = strip_tags($_SESSION['email3']);
$user_rank = strip_tags($_SESSION['user_rank3']);
$admin_identity =  strip_tags($_SESSION['admin_id3']);


$mt = microtime(true);
$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");


include('data6rst.php');

$feedback= strip_tags($_POST['feedback']);



// Make API Call to AzureAI Sentimental API

$data_param ='{ documents: [{ id: "1", text: "'.$feedback .'"}]}';


$url ='https://mytextanalyticsapp101.cognitiveservices.azure.com/text/analytics/v3.1-preview.3/sentiment?opinionMining=true';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Ocp-Apim-Subscription-Key: your-api-key-goes-here"));  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 

//echo $output;


$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// catch error message before closing
if (curl_errno($ch)) {
    //echo $error_msg = curl_error($ch);
}

curl_close($ch); 

if($http_status==200){

echo "<div style='color:white;background:green;padding:10px;'>Feedback Successfully Analyzed. See Below</div>";

}
else {
echo "<div style='color:white;background:red;padding:10px;'>There is an Issue Making Sentimentals API Call. Please Check Internet Connections</div>";
exit();

}   




$json = json_decode($output, true);
$sentiment = $json["documents"][0]["sentiment"];
$positivity = $json["documents"][0]["confidenceScores"]["positive"];
$negativity = $json["documents"][0]["confidenceScores"]["negative"];
$neutrality = $json["documents"][0]["confidenceScores"]["neutral"];


if($sentiment == 'positive'){
$confidence =$positivity;
$confidence1 ='Happy';
$confidence_percentage = $confidence * 100;
$img_emotion ='happy.png';


}


if($sentiment == 'negative'){
$confidence =$negativity;
$confidence1 ='Sad';
$confidence_percentage = $confidence * 100;
$img_emotion ='sad.png';

}


if($sentiment == 'neutral'){
$confidence =$neutrality;
$confidence1 ='Mild';
$confidence_percentage = $confidence * 100;
$img_emotion ='neutral.png';


}
/*
foreach($row["sentences"] as $row1){
echo $sentiment = $row1["sentiment"];
//echo $positive = $row1["confidenceScores"]["positive"];
//echo $negative = $row1["confidenceScores"]["negative"];
//echo $neutral = $row1["confidenceScores"]["neutral"];

echo $text = $row1["text"];


}
*/

$text = $json["documents"][0]["sentences"][0]["text"];
$offset = $json["documents"][0]["sentences"][0]["offset"];

$length = $json["documents"][0]["sentences"][0]["length"];





echo 
  "<div style='background:#c1c1c1;color:black;'><b style='color:#800000'>Feed Back Sentimental Analysis</b>
 <div class='title_css1'><b>Sentiment: </b> $sentiment</div>
 <div class='title_css1'><b>Positivity: </b> $positivity</div>
 <div class='title_css1'><b>Negativity: </b> $negativity </div>
 <div class='title_css1'><b>Neutrality: </b> $neutrality </div>
 <div class='title_css1'><b style='color:#800000;font-size:16px;'>Analyzed Feedback Sentimental Tags: &nbsp;
</b> $sentiment&nbsp;&nbsp;&nbsp;
<b style='color:#800000;font-size:16px;'>Confidence:</b> $confidence_percentage %</div>

<div>
The Customer/User is <b> $confidence1 &nbsp;&nbsp;</b><img src='$img_emotion' style='width:60px;max-width:60px;height:60px;max-height:60px;border-style: solid; border-width:3px; border-color: orange;border-radius:50%'>
</div>

<br>


<span class='col-sm-6'>
<center><b>Text Analzyed</b></center><br>

 <div class='title_css1'><b>Text: </b> $text </div>
 <div class='title_css1'><b>Offset: </b> $offset </div>
 <div class='title_css1'><b>Length: </b> $length </div>
</span>


<span class='col-sm-6'>
<center><b>Sentiments Analysis</b></center><br>
Feedback is <b>$sentiment</b>
</span>





</div>";













?>