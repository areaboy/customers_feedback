<?php

error_reporting(0);
session_start();

$uid = strip_tags($_SESSION['uid3']);
$userid = $uid;
$fullname = strip_tags($_SESSION['fullname3']);
$username =  strip_tags($_SESSION['username3']);
$userphoto = strip_tags($_SESSION['photo3']);
$user_rank = strip_tags($_SESSION['user_rank3']);

$postid = strip_tags($_POST['postid']);
$issue_id =$postid;
$comdesc = strip_tags($_POST['comdesc']);
$email = strip_tags($_POST['email']);
$recipient_name= strip_tags($_POST['recipient_name']);
$email_address = $email;

$sender_name = $fullname;


 
if ($comdesc == ''){
exit();
}

include('data6rst.php');


if($comdesc != ''){



$token= md5(uniqid());
$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");
$pa = 0;

$statement = $db->prepare('INSERT INTO feedback_comments_report
(postid,type,comment,timer1,timer2,userid,username,fullname,photo,comment_approve)
 
                          values
(:postid,:type,:comment,:timer1,:timer2,:userid,:username,:fullname,:photo,:comment_approve)');

$statement->execute(array( 
':postid' => $postid,
':type' => '1',
':comment' => $comdesc,
':timer1' => $timer,
':timer2' => $created_time,
':userid' => $userid,
':username' => $username,
':fullname' => $fullname,
':photo' => $userphoto,
':comment_approve' => '0'

));

$res = $db->query("SELECT LAST_INSERT_ID()");
$commentID = $res->fetchColumn();



// update comments conts for posts

$cct = $db->prepare('select * from feedback_reports where id=:id');
$cct->execute(array(':id' =>$postid));
$rct_row = $cct->fetch();
$totalcom = $rct_row['total_comments'];
$total_comment_post = $totalcom + 1;

$update2= $db->prepare('UPDATE feedback_reports set total_comments =:total_comments where id=:id');
$update2->execute(array(':total_comments' => $total_comment_post, ':id' =>$postid));



// send mail starts

         $to = $email_address;
         $subject = "$fullname Sent a Feedback Thank You Message";
         
         $message = "<b>$comdesc</b>";
         $message .= "<h3>$comdesc</h3>";
         
         $header = "From:support@qbtut.com \r\n";
         $header .= "Cc:support@qbtut.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $msg = mail ($to,$subject,$message,$header);
         
         if( $msg == true ) {
           // echo "Email sent successfully...";
         }else {
            //echo "Email could not be sent...";
         }

// send mail ends

}


$comment_result = $db->prepare('SELECT COUNT(*) AS cntcomment FROM feedback_comments_report WHERE type=1 and postid=:postid');
$comment_result->execute(array(':postid' => $postid));
$comment_row = $comment_result->fetch();
$totalcomment = $comment_row['cntcomment'];
$return_arr = array("comment"=>$totalcomment,"comdesc"=>$comdesc,"comment_username"=>$username,"comment_fullname"=>$fullname,"comment_photo"=>$userphoto,"comment_time"=>$timer);

echo json_encode($return_arr);