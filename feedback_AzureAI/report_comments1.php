<?php
//error_reporting(0); 
?>

<script src="jquery.min.js"></script>
<script>


$(document).ready(function(){

//comment

 $(".comments").click(function(){



     var postid = this.id; 
     var type = 1;
var comment_type=1;
var comdesc = $('#comdesc').val();
var email = $('#email1').val();
var recipient_name = $('#recipient_name').val(); 
//alert(recipient_name);

if(comdesc == ''){
alert('comment cannot be empty');
return false;
}
        
$('#loader_comment').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait,Processing Comments and Sending Email to Customers...</div>');

        $.ajax({
            url: 'comment_report.php',
            type: 'post',
            data: {postid:postid,comdesc:comdesc, email:email, recipient_name:recipient_name},
            dataType: 'json',
            success: function(data){

                var comment = data['comment'];
                var comdesc = data['comdesc'];
                var comment_username = data['comment_username'];
                 var comment_fullname = data['comment_fullname'];
 var comment_photo = data['comment_photo'];
 var comment_time = data['comment_time'];
$("#comment_total").text(comment);
  var comment_json = "<div style='background:white;border-radius:10%;border-style: solid; border-width:2px; border-color: #ec5574;'>" +
                   
 "<img style='border-style: solid; border-width:3px; border-color:#ec5574; width:40px;height:40px; max-width:40px;max-height:40px;border-radius: 50%;' src='uploads/" + comment_photo +"' /><br>" +
      "<b style='font-size:14px;text-align:left;'>Name</b>: " + comment_fullname + "<br>" +              
                    "<b style='font-size:12px;text-align:left;'>Comment: </b>" + comdesc + "<br>" +
"<span><b> <span class='fa fa-calendar'></span>Time:</b> <span data-livestamp='" + comment_time + "'></span></span>"+
                    "</div>";
$("#commentsubmissionResult").append(comment_json)
alert('Commet Added Successfully');

$('#comdesc').val('');


                        $('#loader_comment').hide();

            }
        });

    });

});






</script>

<?php
session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['uid3'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname3'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['username3'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['photo3'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['email3'], ENT_QUOTES, "UTF-8"));

$user_rank = strip_tags($_SESSION['user_rank3']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <title><?php include('header_title.php'); echo $header_tit; ?> - Welcome <?php echo htmlentities(htmlentities($_SESSION['fullname3'], ENT_QUOTES, "UTF-8")); ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">







<style>
.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}
  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:purple;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }


.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: #800000;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}



.invite_btn{
background-color: purple;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.invite_btn:hover {
background: black;
color:white;
}


.course_btn{
background-color: red;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.course_btn:hover {
background: black;
color:white;
}


.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: #800000;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: #800000;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:#800000;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: black;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}








.e_search_form{
width: 38vw;
height:60px;
padding:10px;
cursor:pointer;
border:none;
border-radius:15%;
color:black;
font-size:16px;
background:white;

//transform: skew(-22deg);
margin-left:-90px;

}

.e_search_form:hover{

border-style: solid; border-width:4px; border-color: #824c4e;
background: #dddddd;
color: black;
}



@media screen and (max-width: 768px) {
  .e_search_form{

  width: 100%;
  padding: 20px;
margin-left:0px;
  }
}



@media screen and (max-width: 600px) {
  .e_search_form{
  width: 100%;
  padding: 20px 
margin-left:0px; 
  }
}





.readmore_btn{
background-color: #800000;
padding: 6px;
color:white;
font-size:14px;
border-radius: 10%;
border: none;
cursor: pointer;
text-align: center;
//width:100%;
z-index: -999;
}
.readmore_btn:hover {
background: black;
color:white;
}	




</style>





    </head>
    <body>

 
</head>
<body>




<?php

$token = '1';
$usern  = '1';

?>


<script>

// stopt all bootstrap drop down menu from closing on click inside
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});


</script>



<!--start left column all-->

    <div class="left-column-all left_shifting">

<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">




<!--start post comments notification-->

<style>

.notify_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: green; padding: 2px 6px;font-size:14px; }
.notify_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:14px; }

</style>




<script>

$(document).ready(function(){

var userid_sess_data = '<?php echo $userid_sess; ?>';
$("#loader-notify_alert_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'notify_alert.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);

$("#loader-notify_alert_posts").hide();
$("#result-notify_alert_posts").html(msg);
//setTimeout(function(){ $('#result-notify_alert_posts').html(''); }, 5000);	


			
	
}
			
		});
		
		

});


</script>


<li>
<span style='color:white;' class="dropdown fa fa-bell">
  <a style="color:white;font-size:14px;cursor:pointer;" title='Posts, Comments and Like Alerts' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown">
  <span class="notify_count"><span id="loader-notify_alert_posts"></span><span id="result-notify_alert_posts"></span></span>
</a>

<ul class="dropdown-menu" style='width:350px;height: 400px;overflow-y : scroll;'>
<h4 style='color:blue;'>Realtime Notification Alerts</h4>
<button class="btn btn-primary" id="refresh_notify" title="Refresh Notification">Refresh Notification</button>
<br>


<script>

$(document).ready(function(){


var userid_sess_data = '<?php echo $userid_sess; ?>';
var username_sess_data = '<?php echo $userid_sess; ?>';

var sender_id=userid_sess_data;
var sender_username=username_sess_data;


if(sender_id ==''){
alert('something is wrong with Senders Id');
}


else{


$("#loader-load-notify-post").fadeIn(400).html('<br><div style="color:white;background:#ec5574;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait,Loading Your Notification Alerts...</div>');
var datasend = {sender_id:sender_id, sender_username:sender_username};


	
		$.ajax({
			
			type:'POST',
			url:'notification_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-load-notify-post").hide();
$("#result-load-notify-post").html(msg);
//setTimeout(function(){ $('#result-load-notify-post(''); }, 5000);				

//location.reload();	
}
			
		});
		
		}


});










$(document).ready(function(){

  $('#refresh_notify').click(function () {
var userid_sess_data = '<?php echo $userid_sess; ?>';
var username_sess_data = '<?php echo $userid_sess; ?>';

var sender_id=userid_sess_data;
var sender_username=username_sess_data;


if(sender_id ==''){
alert('something is wrong with Senders Id');
}


else{


$("#loader-load-notify-post").fadeIn(400).html('<br><div style="color:white;background:#ec5574;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait,Loading Your Notification Alerts...</div>');
var datasend = {sender_id:sender_id, sender_username:sender_username};


	
		$.ajax({
			
			type:'POST',
			url:'notification_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-load-notify-post").hide();
$("#result-load-notify-post").html(msg);
//setTimeout(function(){ $('#result-load-notify-post(''); }, 5000);				

//location.reload();	
}
			
		});
		
		}





// start notify 1


var userid_sess_data = '<?php echo $userid_sess; ?>';
$("#loader-notify_alert_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'notify_alert.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);

$("#loader-notify_alert_posts").hide();
$("#result-notify_alert_posts").html(msg);
//setTimeout(function(){ $('#result-notify_alert_posts').html(''); }, 5000);	


			
	
}
			
		});
		


// end notify 1


});


});


</script>



<!-- form START-->
<div id="loader-load-notify-post"></div>
<div id="result-load-notify-post"></div>


<!--form ENDS-->

<p></p>

</ul></span>
&nbsp;&nbsp;
</li>


<!--end post comments notifications-->

<li class="navgate"><a title='View Dashboard' href="dashboard.php" style="border-style: solid; border-width:4px; border-color:orange;color:white;font-size:14px;">Dashboard</a></li>


<li class="navgate"><img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="uploads/<?php echo htmlentities(htmlentities($_SESSION['photo3'], ENT_QUOTES, "UTF-8")); ?>" width="80px" height="80px">


<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown"><?php echo htmlentities(htmlentities($_SESSION['fullname3'], ENT_QUOTES, "UTF-8")); ?>
  <span class="caret"></span></a>

<ul class="dropdown-menu col-sm-12">
<li><a title='My Profile' href="profile_base.php">My Profile/Posts</a></li>
<li><a title='Logout' href="logout.php">Logout</a></li>

</ul></span>

</li>



      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->








<div class='row'>
<br><br><br>

<!--Start Left-->
<div class='col-sm-3'>


</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-12'>






<!-- Main Post Database query starts here -->









<style>
.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


.map_css{
background:#ec5574;
color:black;
border:none;
padding:10px;
border-radius:10%;
}


.map_css:hover{
background:orange;
color:black;


}



.map_css2{
background:purple;
color:white;
border:none;
padding:10px;
border-radius:10%;
cursor:pointer;
}


.map_css2:hover{
background:orange;
color:black;


}



.map1_css{
background:purple;
color:black;
border:none;
padding:10px;
border-radius:10%;
}


.map1_css:hover{
background:orange;
color:black;


}



.action_css{
background:#ec5574;
color:white;
border:none;
padding:6px;
border-radius:10%;
cursor:pointer;
}


.action_css:hover{
background:orange;
color:black;


}



.action_css1{
background:#800000;
color:white;
border:none;
padding:6px;
border-radius:10%;
cursor:pointer;
}


.action_css1:hover{
background:orange;
color:black;


}



.point_count2 { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: red; padding: 2px 6px;font-size:14px; }

</style>

<h3>Feedback Reports Management System</h3>


        <div class="content">

            <?php

include('data6rst.php');

$issueid= strip_tags($_GET['pid']);


$result = $db->prepare("SELECT * FROM feedback_reports where id =:id order by id desc");
$result->execute(array(':id' => $issueid));

$count_post = $result->rowCount();
if($count_post ==0){
echo "<div style='background:red;color:white;padding:10px;border:none;'>No Feedback Reports Details Found for this Posts.. <b></b></div>";
}


while ($row = $result->fetch()) {



$reportid = htmlentities(htmlentities($row['id'], ENT_QUOTES, "UTF-8"));

$postid = $reportid;
$id = $reportid;


$title = htmlentities(htmlentities($row['title'], ENT_QUOTES, "UTF-8"));
$details = $row['content'];
$description = $details;

$timer1 = htmlentities(htmlentities($row['timer1'], ENT_QUOTES, "UTF-8"));
$timer2 = htmlentities(htmlentities($row['timer2'], ENT_QUOTES, "UTF-8"));
$fullname = htmlentities(htmlentities($row['fullname'], ENT_QUOTES, "UTF-8"));
$userphoto = htmlentities(htmlentities($row['userphoto'], ENT_QUOTES, "UTF-8"));
$photo =$userphoto;
$userid = htmlentities(htmlentities($row['userid'], ENT_QUOTES, "UTF-8"));
$status = htmlentities(htmlentities($row['status'], ENT_QUOTES, "UTF-8"));
$total_comments = htmlentities(htmlentities($row['total_comments'], ENT_QUOTES, "UTF-8"));
$report_date = htmlentities(htmlentities($row['report_date'], ENT_QUOTES, "UTF-8"));
$report_month = htmlentities(htmlentities($row['report_month'], ENT_QUOTES, "UTF-8"));
$email = htmlentities(htmlentities($row['email'], ENT_QUOTES, "UTF-8"));

$sentiment = htmlentities(htmlentities($row['sentiment'], ENT_QUOTES, "UTF-8"));
$positivity = htmlentities(htmlentities($row['positivity'], ENT_QUOTES, "UTF-8"));
$negativity = htmlentities(htmlentities($row['negativity'], ENT_QUOTES, "UTF-8"));
$neutrality = htmlentities(htmlentities($row['neutrality'], ENT_QUOTES, "UTF-8"));
$emotion_img = htmlentities(htmlentities($row['emotion_img'], ENT_QUOTES, "UTF-8"));



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







            ?>



<?php
if($issueid !=''){
?>
   

                    <div class="post well">


<img style='border-style: solid; border-width:3px; border-color:#3b5998; 
width:60px;height:60px; max-width:60px;max-height:60px;border-radius: 50%;' src='uploads/<?php echo $userphoto; ?>' />

 <div style='font-size:14px;color:black;'><b>Feedbacked By:</b> <?php echo $fullname; ?></div><br />







<div style='color:black;font-family:comic sansms;font-size:16px'><b>Feedback Topic:</b> <?php echo $title; ?></div><br>
<div class='title_css1'><b>FeedBack Reports:</b> <?php echo $details; ?></div>




<div style='background:#c1c1c1;color:black;'><b style='color:#800000'>Feed Back Sentimental Analysis</b>
<div class='title_css1'><b>Sentiment: </b> <?php echo $sentiment; ?></div>
<div class='title_css1'><b>Positivity: </b><?php echo $positivity; ?></div>
<div class='title_css1'><b>Negativity: </b> <?php echo $negativity; ?></div>
<div class='title_css1'><b>Neutrality: </b> <?php echo $neutrality; ?></div>
<div class='title_css1'><b style='color:#800000;font-size:16px;'>Analyzed Feedback Sentimental Tags: &nbsp;</b> <?php echo $sentiment; ?> &nbsp;&nbsp;&nbsp;
<b style='color:#800000;font-size:16px;'>Confidence:</b> <?php echo $confidence_percentage; ?> %</div>
<div>
The Customer/User is <b>(<?php echo $confidence1; ?>)&nbsp;&nbsp;</b>
<img src="<?php echo $img_emotion; ?>"  style='width:60px;max-width:60px;height:60px;max-height:60px;border-style: solid; border-width:3px; border-color: orange;border-radius:50%'>


<br><div style='' data-toggle="modal" data-target="#myModal_action_sentiments"  title="Analyze Feedback Sentiments in Details" data-feedback="<?php echo $description; ?>"  data-id="<?php echo $id; ?>" data-fullname="<?php echo $fullname; ?>"  data-userid="<?php echo $userid; ?>" data-photo="<?php echo $userphoto; ?>" data-title="<?php echo $title; ?>"  data-status="<?php echo $status; ?>" data-priority="<?php echo $priority; ?>"  class="btn_action_updateReports pull-right action_css">
<span style="font-size:20px;color:black;" class="fa fa-globe"></span> Analyze Feedback Sentiments in Details </div><br>

<input type='hidden' name='email1' id='email1' value='<?php echo $email; ?>'>

<input type='hidden' name='recipient_name' id='recipient_name' value='<?php echo $fullname; ?>'>
  



</div>
</div>






<span><b> <span style='color:#3b5998' class='fa fa-calendar'></span>Time:</b> </span><b><span data-livestamp='<?php echo $timer1; ?>'></span></b>

<span >(<?php echo $timer2; ?>)</span><br /><br />




<br /><br />
<span style="font-size:26px;color:#800000;" class="fa fa-comments"></span> 
&nbsp;<span id="<?php echo $postid; ?>"  style="color:#800000;cursor:pointer;" title="Comments" />Comments</span>
(<span id="comment_total"><?php echo $total_comments; ?></span>)




                 
</div>

<?php
}
?>






<!--comment starts-->
<?php

$commentsData = $db->prepare('SELECT * FROM feedback_comments_report WHERE postid=:postid');
$commentsData->execute(array(':postid' => $postid));
while ($rowComment= $commentsData->fetch()) {

$commentid = htmlentities(htmlentities($rowComment['id'], ENT_QUOTES, "UTF-8"));
$pid = htmlentities(htmlentities($rowComment['postid'], ENT_QUOTES, "UTF-8"));

$comment = htmlentities(htmlentities($rowComment['comment'], ENT_QUOTES, "UTF-8"));
$comment_userid = htmlentities(htmlentities($rowComment['userid'], ENT_QUOTES, "UTF-8"));
$comment_username = htmlentities(htmlentities($rowComment['username'], ENT_QUOTES, "UTF-8"));
$comment_fullname = htmlentities(htmlentities($rowComment['fullname'], ENT_QUOTES, "UTF-8"));
$comment_photo = htmlentities(htmlentities($rowComment['photo'], ENT_QUOTES, "UTF-8"));
$comment_timer1 = htmlentities(htmlentities($rowComment['timer1'], ENT_QUOTES, "UTF-8"));


?>


<!--comment div starts-->


                   

 <div style="background:white;border-radius:25%;border-style: solid; border-width:2px; border-color: #ec5574;">
                        <div  class="cc1">
                            

<div class='pull-left1'>
<img class='' style='border-style: solid; border-width:3px; border-color:#ec5574; width:40px;height:40px; max-width:40px;max-height:40px;border-radius: 50%;' 
src='uploads/<?php echo $comment_photo; ?>'><br>
<b style='color:#ec5574;font-size:14px;' >Name: <?php echo $comment_fullname; ?>  </b><br>
</div>

<div class=''>

<b style='font-size:12px;text-align:left;'>Comments/Email Messages: <?php echo $comment; ?></b><br>

<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $comment_timer1;?>"></span></span> <br><br>
</div>




                        </div>
            <div class="cc2">
</div>            
</div>
<!--comment div ends-->

<?php
// close while in comments
                }
            ?>


<!--comment ends-->




<!-- comment starts1-->
<div class="alert alert-warning">

<div id="commentsubmissionResult"></div><br>

<div class="col-sm-12 form-group">
<center><b>Send a Thank You Message to your Customers via Email Address about his/her Feedbacks</b></center><br>
 <textarea id="comdesc"  class=" form-control" style="color:black;"  placeholder="Enter Comments/Email Messages">
</textarea><br>

<div id="loader_comment"></div>
<button  id="<?php echo $postid; ?>" class="comments pull-right readmore_btn">Comments/Send Email</button>
</div>
<br><br>



</div>

<!-- comment ends1-->






            <?php

                }
            ?>



<!-- Main Post Database query ends here-->

</div>







</div>
<!--End Right-->

</div>
<!--Row-->








<style>

.title_css{
//background: green;
color:green;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: #800000;
color:white;
padding:6px;
cursor:pointer;
border:none;
border-radius:10%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: green;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.offering_css:hover{
background: black;
color:white;

}



.cat_css{
background: #ec5574;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_css:hover{
background: black;
color:white;

}



</style>



<!--form START-->











<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">
        <div class="col-sm-12">

<p class="footer_text1"><?php echo $header_tit; ?></p>
<p class="footer_text2"><?php include('footer_title.php'); echo $footer_tit1; ?></p>
<br>

        </div>



        </div>

<br/>
  <p></p>
</footer>

<!-- footer Section ends -->






<script>


//Feedback Reports updates

$(document).ready(function(){
//$('.btn_action_updateReports').click(function(){
$(document).on( 'click', '.btn_action_updateReports', function(){ 

var reportid = $(this).data('id');
var title = $(this).data('title');
var status = 'Open';
var priority = 'High';
var userid = $(this).data('userid');
var feedback = $(this).data('feedback');



$('#title11').html(title);
$('#title12').html(title);
$('#status11').html(status);
$('#priority11').html(priority);
$('#feedback11').html(feedback);
$('#feedback12').html(feedback);

$('#reportid101').val(reportid).value;
$('#reportid102').val(reportid).value;
$('.feedback102').val(feedback).value;


$('#userid101').val(userid).value;
$('#userid102').val(userid).value;


		
	})


});
//end Feedback Reports updates





</script>






















<script>

// clear Modal div content on modal closef closed
$(document).ready(function(){
$('#myModal_action_sentiments').on('hidden.bs.modal', function() {
//alert('Modal Closed');
   $('.myform_sentiments').empty();  
 console.log("modal closed and content cleared");
 });
});




</script>

<!-- sentiments Modal starts here-->

<div class="container_action">

  <div class="modal fade " id="myModal_action_sentiments" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing">
      <div class="modal-content">
        <div class="modal-header" style={{color:'black', background:'#ddd'}}>
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>

          <h4 class="modal-title">Feedback Full Details Sentimental Analysis</h4>
        </div>
        <div class="modal-body">
     




<script>

$(document).ready(function(){
$('#sentiment_btn').click(function(){
		
var feedback = $('.feedback102').val();
//alert(feedback);

if(feedback==""){
alert('There is a Problem with Feedback being Analyzed..Reload the Page and Try Again.');

}


else{

$('#loader_sentiment').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait,Feedback being Analyzed Sentimentally...</div>');
var datasend = {feedback:feedback};	
		$.ajax({
			
			type:'POST',
			url:'feedback_analyzed.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


                        $('#loader_sentiment').hide();
				$('#result_sentiment').fadeIn('slow').prepend(msg);



			
			}
			
		});
		
		}
		
	})
					
});




</script>




<!-- form starts  -->



<h4>Feedback Reports Topic:  <span id="title12"></span></h4>
<b>Feedback: </b> <span id="feedback12"></span><br />



<!-- s start-->

<div style='background:#f1f1f1; padding:16px;color:black'>




<input type="hidden" name="feedback101" id="feedback101" class="feedback102" value="">

            </div>



<div class="form-group">
<div id="loader_sentiment"></div>

<div id="result_sentiment" class="myform_sentiments"></div>
<br /><br />
                    
<button type="button" id="sentiment_btn" class=""  style='background:#ddd;color:black;padding:10px;border:none'>Analyze Feedback</button>
</div>



</div>



<!-- s ends  -->







<!-- form ends  -->





<br /><br />
<br /><br />
<br /><br />
</div>



        </div>
        <div class="modal-footer modal_footer_color" style='color:black;background:#ddd'}}>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



<!-- sentiments Modal ends here  -->



   
</body>
</html>








<?php

// update table notification with Unread for read Updates starts
include('data6rst.php');
$notifyId = intval($_GET['notifyId']);

if($notifyId != ''){

include('data6rst.php');
$update= $db->prepare('UPDATE notification set status =:status where id =:id');

$update->execute(array( 
':id' => $notifyId,
':status' => 'read' 
));


}



?>














