<?php
//error_reporting(0);

//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST');
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);


include('data6rst.php');




session_start();
$userid_sess_data = htmlentities(htmlentities($_SESSION['uid3'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['email3'], ENT_QUOTES, "UTF-8"));
$user_rank = strip_tags($_SESSION['user_rank3']);

$uid=$userid_sess_data;






$data[] = array('Sentiments', 'Total Sentiments', 'Positive Sentiments', 'Negative Sentiments', 'Neutral Sentiments');

$result = $db->prepare('SELECT * FROM feedback_statistics where owner_id =:owner_id');
$result->execute(array(':owner_id' => $uid));
$nosofrows = $result->rowCount();
while($row = $result->fetch()){
$id= $row['id'];


//foreach($json['data'] as $v1){
$total_sentiments = $row['total_sentiments'];
$total_postive = $row['total_postive'];
$total_negative = $row['total_negative']; 
$total_neutral = $row['total_neutral']; 

$sentiments= 'Feedback_Sentiments';
$data[] = array($sentiments,(int)$total_sentiments,(int)$total_postive,(int)$total_negative,(int)$total_neutral);
}


echo json_encode($data);
