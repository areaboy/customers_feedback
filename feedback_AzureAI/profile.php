<?php
//error_reporting(0); 
?>



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

background: purple;
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
background-color: purple;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: purple;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:purple;
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
<h4 style='color:blue;'>Real-time Notification  Alerts</h4>
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
<div class='col-sm-0'>



</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-12'>



<!--create profile form START here-->


<?php

$request_userid=strip_tags($_GET['id']);

?>


<?php
include('data6rst.php');
$st = $db->prepare("SELECT * FROM appointment where patient_id=:patient_id");
$st->execute(array(':patient_id' => $request_userid));
$st_count = $st->rowCount();



// Get Users Info

$st1 = $db->prepare("SELECT * FROM users where id=:id");
$st1->execute(array(':id' => $request_userid));
$st_count1 = $st1->rowCount();
$st_row1= $st1->fetch();
$fullname_u = $st_row1['fullname'];
$email_u = $st_row1['email'];
$points_u = $st_row1['points'];
$levels_u = $st_row1['levels'];
$timing_u = $st_row1['timer1'];
$photo_u = $st_row1['photo'];

$phoneno_u = $st_row1['phone_no'];

$sid_u = $st_row1['id'];

$country = $st_row1['country'];

?>

<div  class='col-sm-12' style='border-style: dashed; border-width:2px; border-color: orange;color:black;padding:10px;background:#eeeeee'>

<h3><center>Users Profiles</center></h3>
<div class='col-sm-6'>
<img style='max-height:200px;max-width:200px;' class='img-rounded' width='200px' height='200px' src='uploads/<?php echo htmlentities(htmlentities($photo_u, ENT_QUOTES, "UTF-8")); ?>'>
<br>
</div>
<div class='col-sm-6'>
<b> Name:</b> <?php echo htmlentities(htmlentities($fullname_u, ENT_QUOTES, "UTF-8")); ?>
<br>


<b style='font-size:16px;'> Email:</b> <?php echo htmlentities(htmlentities($email_u, ENT_QUOTES, "UTF-8")); ?><br>
<b style='font-size:16px;'> Status:</b> Patients<br>
<b style='font-size:16px;color:green'>Total Appointments Booked:</b> <span title='Total Appointments Booked:(<?php echo htmlentities(htmlentities($st_count, ENT_QUOTES, "UTF-8")); ?>) ' class='point_count'><?php echo htmlentities(htmlentities($st_count, ENT_QUOTES, "UTF-8")); ?></span><br>

<b style='font-size:16px;'> Member Since:</b> <span data-livestamp="<?php echo $timing_u;?>"></span><br>
<div style='background:green;color:white;padding:10px;border-radius:20%;font-size:16px;'><i  style='font-size:20px;' class='fa fa-check'></i> User Verified</div>
</div>



</div>


<div  class='col-sm-12' style='width:100%;'><br><br></div>




<style>

.senddata_css{
background:#ec5574;
color:white;
border:none;
padding:10px;
border-radius:10%;
text-align:center;
cursor:pointer;
}


.senddata_css:hover{
background:orange;
color:black;


}


.senddata1_css{
background:green;
color:white;
border:none;
padding:10px;
border-radius:10%;
text-align:center;
cursor:pointer;
}


.senddata_css:hover{
background:orange;
color:black;

}



.btn_css{
background:#800000;
color:white;
border:none;
padding:10px;
border-radius:10%;
text-align:center;
cursor:pointer;
}


.btn_css:hover{
background:orange;
color:black;

}






.btn_css1{
background:#800000;
color:white;
border:none;
padding:20px;
border-radius:10%;
text-align:center;
cursor:pointer;
font-size:18px;
}


.btn_css1:hover{
background:orange;
color:black;

}





.btn_css2{
background:purple;
color:white;
border:none;
padding:20px;
border-radius:10%;
text-align:center;
cursor:pointer;
font-size:18px;
}


.btn_css2:hover{
background:orange;
color:black;

}



</style>

<h3><center> Users Private Messaging System</center></h3>
<br><br>



<div style='background:black; border-style: dashed; border-width:2px; border-color: orange; '>
<span style=''><span data-toggle='modal' data-target='#myModal_email_t' class='btn_css1 col-sm-6 sms_btn_t' title='Send Email' alt='Send Email'>
<span class='s_icon fa fa-envelope-o'></span>Email</span></span>

<span style=''><span  data-toggle='modal' data-target='#myModal_sms_t' class='btn_css2 col-sm-6 sms_btn_t' title='Send SMS' alt='Send SMS'>
<span class='s_icon fa fa-comments-o'></span>SMS</span></span>


</div>

<div  class='col-sm-12' style='width:100%;'><br><br></div>





<!--create profile form ENDS-->




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

</style>


        <div class="content">

     
<!-- start-->     




<!-- end-->

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







<!--  Email starts here -->


<div class="container_Email_modal">

  <div class="modal fade " id="myModal_email_t" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 pull-right modaling_sizing">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1;">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
          <h4 class="modal-title">Send Email Messages:</h4>
        </div>
        <div class="modal-body">
          


<img class='' style='border-style: solid; border-width:3px; border-color:#800000; width:80px;height:80px; 
max-width:80px;max-height:80px;border-radius: 50%;' src='uploads/<?php echo $photo_u; ?>'><br>
<b style='color:#800000;font-size:18px;' >Recipient Name: <?php echo $fullname_u; ?> </b><br>



<!--form START-->



        <script>


// send t mail starts here

$(document).ready(function(){
	
	
	$('#email_btn_t').click(function(){
		

//var recipient_email = $('#recipient_email').val();

var recipient_email = '<?php echo $email_u; ?>';
var recipient_name = '<?php echo $fullname_u; ?>';
var recipient_uid = "<?php echo $sid_u; ?>";


var sender_name= "<?php echo htmlentities(htmlentities($_SESSION['fullname'], ENT_QUOTES, "UTF-8")); ?>";

var email_subject = $('#email_subject1').val();
var email_message = $('#email_message1').val();

var atemail = recipient_email.indexOf("@");
var dotemail = recipient_email.lastIndexOf(".");


if(recipient_name==""){
alert('There is an Issue getting Recipient Name');
}


else if(email_subject==""){
alert('please Enter Email Subject');
}

else if(email_message==""){
alert('please Enter Email Message');
}

else if(recipient_email==""){
alert('There is an Issue getting Recipient Email Address');
}

else  if (atemail < 1 || ( dotemail - atemail < 2 )){
alert("Please enter correct email Address");
    }

else if(sender_name==""){
alert('There is an issue with Team Head Recipient Name');
}

else{
$('#loader_email_t').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Email is being sent...</span>');
var datasend = "recipient_email="+ recipient_email + "&sender_name=" +sender_name + "&recipient_name=" +recipient_name + "&email_subject=" +email_subject+ "&email_message=" +email_message+ "&recipient_uid=" +recipient_uid;


		$.ajax({
			
			type:'POST',
			url:'t_email.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg_email){

	if(msg_email == 1){
alert('Email successfully Sent..');
			
$('#email_subject1').val('');
$('#email_message1').val('');


				$('#loader_email_t').hide();
$('#result_email_t').html("<div style='color:white;background:green;padding:10px;'>Email Successfully Sent</div>");

setTimeout(function(){ $('#result_email_t').html(''); }, 5000);				
			

}


	if(msg_email == 0){
alert('Email could not be Sent. Please ensure you are connected to Internet.');

$('#loader_email_t').hide();
$('#result_email_t').html("<div style='color:white;background:red;padding:10px;'>Email could not be Sent. Please ensure you are connected to Internet.</div>");

setTimeout(function(){ $('#result_email_t').html(''); }, 5000);

}





if(msg_email == 2){

alert('You cannot send Email to Yourself..');			
$('#loader_SMS_t').hide();
$('#result_SMS_t').html("<div style='color:white;background:red;padding:10px;'>You cannot send Email to Yourself</div>");
setTimeout(function(){ $('#result_SMS_t').html(''); }, 5000);

}



if(msg_email == 3){

alert('Only Users Friends can send Email Messages');			
$('#loader_email_t').hide();
$('#result_email_t').html("<div style='color:white;background:red;padding:10px;'>Only Users Friends can send Email Messages</div>");
setTimeout(function(){ $('#result_email_t').html(''); }, 5000);

}




if(msg_email == 4){

alert('Only Users Friends can send Email Messages');			
$('#loader_email_t').hide();
$('#result_email_t').html("<div style='color:white;background:red;padding:10px;'>Only Users Friends can send Email Messages</div>");
setTimeout(function(){ $('#result_email_t').html(''); }, 5000);

}




			
			}
			
		});
		
		}
		
	})
					
});

// send t mail ends here



        </script>



<div class="form-group">
              <span for="fname">
 Enter Email Subject</span>
              <input type="text" class="col-sm-12 form-control" id="email_subject1" name="email_subject1" 
placeholder="Enter Email Subject">
            </div>
<br>

<div class="form-group">
              <span for="email">
Enter Email Message</span>
              <textarea type="text" class="col-sm-12 form-control" id="email_message1" name="email_message1" 
placeholder="Enter Email Message"></textarea>
            </div><br>



                    <div class="form-group">
                   




                        <div id="loader_email_t"></div>
                        <div id="result_email_t"></div>
                    

<button type="button" id="email_btn_t" class="pull-right invite_btn"  /> Send Email Now</button>
<br><br><br><br>
</div>

<!--form ENDS-->


        </div>
        <div class="modal-footer modal_footer_color" style="color:black;background:#ddd;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--  T_Email ends here -->











<!--  t_SMS starts here -->


<div class="container_t_SMS_modal">

  <div class="modal fade " id="myModal_sms_t" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 pull-right modaling_sizing">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Send SMS</h4>
        </div>
        <div class="modal-body">
          



<img class='' style='border-style: solid; border-width:3px; border-color:#800000; width:80px;height:80px; 
max-width:80px;max-height:80px;border-radius: 50%;' src='uploads/<?php echo $photo_u; ?>'><br>
<b style='color:#800000;font-size:18px;' >Recipient Name: <?php echo $fullname_u; ?> </b><br>



<!--form START-->



        <script>


// send SMS starts here

$(document).ready(function(){
	
	
	$('#SMS_btn_t').click(function(){
		

var recipient_phoneno = '<?php echo $phoneno_u; ?>';
var recipient_name =   '<?php echo $fullname_u; ?>';
var recipient_uid = "<?php echo $sid_u; ?>";

var sender_name= "<?php echo htmlentities(htmlentities($_SESSION['fullname'], ENT_QUOTES, "UTF-8")); ?>";
var message = $('#message1').val();


 var str_phone = recipient_phoneno;
var result_phone = /\+/.test(str_phone);
//alert(result_phone); // true



if(recipient_name==""){
alert('There is an Isuue getting Recipient Name');
}


else if(recipient_phoneno==""){
alert('There is an Isuue getting Recipient Phoneno.');
}

/*
else if(result_phone == false){

alert('Phone Number must begin with plus(+) sign followed by country Code');
return false;
}
*/

else if(message==""){
alert('SMS Message cannot be empty');
}

else{
$('#loader_SMS_t').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, SMS is being sent...</span>');
var datasend = "recipient_phoneno="+ recipient_phoneno + "&sender_name=" +sender_name + "&recipient_name=" +recipient_name + "&message=" +message + "&recipient_uid=" +recipient_uid;
		


		$.ajax({
			
			type:'POST',
			url:'t_sms.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg_SMS){

	if(msg_SMS == 1){
alert('SMS successfully Sent..');
			
$('#message').val('');



				$('#loader_SMS_t').hide();
$('#result_SMS_t').html("<div style='color:white;background:green;padding:10px;'>SMS Successfully Sent</div>");

setTimeout(function(){ $('#result_SMS_t').html(''); }, 5000);				
			

}





	if(msg_SMS == 0){
alert('SMS could not be Sent. Please ensure you are connected to Internet.');

$('#loader_SMS_t').hide();
$('#result_SMS_t').html("<div style='color:white;background:red;padding:10px;'>SMS could not be Sent. Please ensure you are connected to Internet.</div>");

setTimeout(function(){ $('#result_SMS_t').html(''); }, 5000);

}




if(msg_SMS == 2){

alert('You cannot send SMS to Yourself..');			
$('#loader_SMS_t').hide();
$('#result_SMS_t').html("<div style='color:white;background:red;padding:10px;'>You cannot send SMS to Yourself</div>");
setTimeout(function(){ $('#result_SMS_t').html(''); }, 5000);

}



if(msg_SMS == 3){

alert('Only Users Friends can send SMS..');			
$('#loader_SMS_t').hide();
$('#result_SMS_t').html("<div style='color:white;background:red;padding:10px;'>Only Users Friends can send SMS</div>");
setTimeout(function(){ $('#result_SMS_t').html(''); }, 5000);

}




if(msg_SMS == 4){

alert('Only Users Friends can send SMS');			
$('#loader_SMS_t').hide();
$('#result_SMS_t').html("<div style='color:white;background:red;padding:10px;'>Only Users Friends can send SMS</div>");
setTimeout(function(){ $('#result_SMS_t').html(''); }, 5000);

}






			
			}
			
		});
		
		}
		
	})
					
});

// send  t SMS ends here



        </script>



<div class="form-group">
              <span for="fname">
<span class="fa fa-male"></span> Enter SMS Messages</span>
              <textarea class="col-sm-12 form-control" id="message1" name="message1" 
placeholder="Enter SMS Message"></textarea>
            </div>
<br>






                    <div class="form-group">
                   

                        <div id="loader_SMS_t"></div>
                        <div id="result_SMS_t"></div>
                    

<button type="button" id="SMS_btn_t" class="pull-right invite_btn"  /> Send SMS</button>
<br><br>
<br><br>
</div>

<!--form ENDS-->


        </div>
        <div class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--  t_Email ends here -->







   
</body>
</html>



















