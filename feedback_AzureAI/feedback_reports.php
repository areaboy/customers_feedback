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
$title = strip_tags($_POST['title']);
$topic = $title;

//replace any space with hyphen
$sp ='-';
$tt = time();
$title_seo = str_replace(' ', '-', $title.$sp.$tt);


include('data6rst.php');

$description= strip_tags($_POST['description']);
$v_date = strip_tags($_POST['report_date']);
$report_priority = 'High';
$report_status = 'Open';

/*
//$v_date ="02/29/2020";
$ff1 = explode('/', $v_date);
$monthing1= $ff1[0];
$daying1= $ff1[1];
$yearing1 =$ff1[2];
//$bvb1 ='-';
$issue_date ="$yearing1-$monthing1-$daying1";
*/


$report_date = $v_date;
//$report_month= date('m');

//$str_date = '2021-01-14';

$str_date =$report_date;
$ff1 = explode('-', $str_date);
$yearing1 =$ff1[0];
$monthing1= $ff1[1];
$daying1= $ff1[2];


$string = $monthing1;
 
//Get the first character.
$firstCharacter = $string[0];

//Get the second character.
$secondCharacter = $string[1];

if($firstCharacter ==0){
$report_month = $secondCharacter;
}

if($firstCharacter !=0){
$report_month = $monthing1;
}


// Make API Call to AzureAI Sentimental API

$feedback = $description;
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

//echo 21;
//echo "success";
}
else {
//echo "Problem connecting to Sentimental API"
echo 22;
exit();

}   



$json = json_decode($output, true);
$sentiment = $json["documents"][0]["sentiment"];
$positivity = $json["documents"][0]["confidenceScores"]["positive"];
$negativity = $json["documents"][0]["confidenceScores"]["negative"];
$neutrality = $json["documents"][0]["confidenceScores"]["neutral"];

$img_emotion ='';



          
$statement = $db->prepare('INSERT INTO feedback_reports
(title,content,timer1,timer2,username,fullname,userphoto,userid,total_comments,report_date,report_month,email
,positivity,negativity,neutrality,emotion_img,status,admin_identity,sentiment)
                        values
(:title,:content,:timer1,:timer2,:username,:fullname,:userphoto,:userid,:total_comments,:report_date,:report_month,
:email,:positivity,:negativity,:neutrality,:emotion_img,:status,:admin_identity,:sentiment)');
$statement->execute(array( 
':title' => $title,
':content' => $description,
':timer1' => $timer,
':timer2' => $created_time,
':username' => $username,
':fullname' => $fullname,
':userphoto' => $photo,
':userid' => $uid,
':total_comments' => '0',
':report_date' => $report_date,
':report_month' => $report_month,
':email' => $email,
':positivity' => $positivity,
':negativity' => $negativity,
':neutrality' => $neutrality,
':emotion_img' => $img_emotion,
':status' => $user_rank,
':admin_identity' => $admin_identity,
':sentiment' => $sentiment


));



$res = $db->query("SELECT LAST_INSERT_ID()");
$lastId_post = $res->fetchColumn();



// update sentimental emotion image 


if($sentiment == 'positive'){
$img_emotion ='happy.png';
$update= $db->prepare('UPDATE feedback_reports set emotion_img =:emotion_img where id=:id');
$update->execute(array(':emotion_img' => $img_emotion, ':id' =>$lastId_post));

}


if($sentiment == 'negative'){
$img_emotion ='sad.png';
$update= $db->prepare('UPDATE feedback_reports set emotion_img =:emotion_img where id=:id');
$update->execute(array(':emotion_img' => $img_emotion, ':id' =>$lastId_post));
}


if($sentiment == 'neutral'){
$img_emotion ='neutral.png';
$update= $db->prepare('UPDATE feedback_reports set emotion_img =:emotion_img where id=:id');
$update->execute(array(':emotion_img' => $img_emotion, ':id' =>$lastId_post));
}
/*
if($positivity == 0){

$img_emotion ='sad.png';
}else{
$img_emotion ='happy.png';
}
*/


// query table to update notification_post table
$result = $db->prepare('SELECT * FROM users where user_rank=:user_rank and id=:id');
$result->execute(array(':user_rank' => 'Admin', ':id' => $uid));
$nosofrows = $result->rowCount();



if($nosofrows > 0){
while($row = $result->fetch()){

$reciever_userid = $row['id'];
$reciever_username = $row['username'];

		    
//insert into notification table

$statement1 = $db->prepare('INSERT INTO notification
(post_id,userid,fullname,photo,user_rank,reciever_id,status,type,timing,title,title_seo)
                        values
(:post_id,:userid,:fullname,:photo,:user_rank,:reciever_id,:status,:type,:timing,:title,:title_seo)');
$statement1->execute(array( 

':post_id' => $lastId_post,
':userid' => $userid,
':fullname' => $fullname,
':photo' => $photo,
':user_rank' => $user_rank,
':reciever_id' => $reciever_userid,
':status' => 'unread',
':type' => 'report_post',
':timing' => $timer,
':title' => $title,
':title_seo' => $title_seo
));

}
}






$pst = $db->prepare('select * from feedback_statistics where owner_id =:owner_id');
$pst->execute(array(':owner_id' => $uid));
$r = $pst->fetch();
$counter_points=$r['total_sentiments'];
$final_count = $counter_points + 1;
$update= $db->prepare('UPDATE feedback_statistics set total_sentiments =:total_sentiments where owner_id =:owner_id');
$update->execute(array(':total_sentiments' => $final_count, ':owner_id' => $uid));





if($sentiment == 'positive'){
$pst = $db->prepare('select * from feedback_statistics where owner_id =:owner_id');
$pst->execute(array(':owner_id' => $uid));
$r = $pst->fetch();
$counter_points=$r['total_postive'];
$final_count = $counter_points + 1;
$update= $db->prepare('UPDATE feedback_statistics set total_postive =:total_postive where owner_id =:owner_id');
$update->execute(array(':total_postive' => $final_count,':owner_id' => $uid));
}



if($sentiment == 'negative'){
$pst = $db->prepare('select * from feedback_statistics where owner_id =:owner_id');
$pst->execute(array(':owner_id' => $uid));
$r = $pst->fetch();
$counter_points=$r['total_negative'];
$final_count = $counter_points + 1;
$update= $db->prepare('UPDATE feedback_statistics set total_negative =:total_negative where owner_id =:owner_id');
$update->execute(array(':total_negative' => $final_count,':owner_id' => $uid));
}




if($sentiment == 'neutral'){

$pst = $db->prepare('select * from feedback_statistics where owner_id =:owner_id');
$pst->execute(array(':owner_id' => $uid));
$r = $pst->fetch();
$counter_points=$r['total_neutral'];
$final_count = $counter_points + 1;
$update= $db->prepare('UPDATE feedback_statistics set total_neutral =:total_neutral where owner_id =:owner_id');
$update->execute(array(':total_neutral' => $final_count,':owner_id' => $uid));
}






if($topic =='Products'){

$pst = $db->prepare('select * from feedback_statistics where owner_id =:owner_id');
$pst->execute(array(':owner_id' => $uid));
$r = $pst->fetch();
$counter_points=$r['total_products'];
$final_count = $counter_points + 1;
$update= $db->prepare('UPDATE feedback_statistics set total_products =:total_products where owner_id =:owner_id');
$update->execute(array(':total_products' => $final_count,':owner_id' => $uid));

}




if($topic =='Design'){

$pst = $db->prepare('select * from feedback_statistics where owner_id =:owner_id');
$pst->execute(array(':owner_id' => $uid));
$r = $pst->fetch();
$counter_points=$r['total_design'];
$final_count = $counter_points + 1;
$update= $db->prepare('UPDATE feedback_statistics set total_design =:total_design where owner_id =:owner_id');
$update->execute(array(':total_design' => $final_count,':owner_id' => $uid));

}



if($topic =='Bugs'){

$pst = $db->prepare('select * from feedback_statistics  where owner_id =:owner_id');
$pst->execute(array(':owner_id' => $uid));
$r = $pst->fetch();
$counter_points=$r['total_bug'];
$final_count = $counter_points + 1;
$update= $db->prepare('UPDATE feedback_statistics set total_bug =:total_bug  where owner_id =:owner_id');
$update->execute(array(':total_bug' => $final_count, ':owner_id' => $uid));

}



if($topic =='Pricing'){

$pst = $db->prepare('select * from feedback_statistics  where owner_id =:owner_id');
$pst->execute(array(':owner_id' => $uid));
$r = $pst->fetch();
$counter_points=$r['total_pricing'];
$final_count = $counter_points + 1;
$update= $db->prepare('UPDATE feedback_statistics set total_pricing =:total_pricing  where owner_id =:owner_id');
$update->execute(array(':total_pricing' => $final_count, ':owner_id' => $uid));

}



if($topic =='Supports'){

$pst = $db->prepare('select * from feedback_statistics  where owner_id =:owner_id');
$pst->execute(array(':owner_id' => $uid));
$r = $pst->fetch();
$counter_points=$r['total_supports'];
$final_count = $counter_points + 1;
$update= $db->prepare('UPDATE feedback_statistics set total_supports =:total_supports where owner_id =:owner_id');
$update->execute(array(':total_supports' => $final_count, ':owner_id' => $uid));

}



if($topic =='Others'){

$pst = $db->prepare('select * from feedback_statistics where owner_id =:onwer_id where owner_id =:owner_id');
$pst->execute(array(':owner_id' => $uid));

$r = $pst->fetch();
$counter_points=$r['total_others'];
$final_count = $counter_points + 1;
$update= $db->prepare('UPDATE feedback_statistics set total_others =:total_others where owner_id =:owner_id');
$update->execute(array(':total_others' => $final_count, ':owner_id' => $uid));

}


if($statement){
echo 1;	

}
else{
//echo "Post submission Failed";
echo 2;
}




?>