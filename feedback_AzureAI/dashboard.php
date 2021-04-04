<?php
error_reporting(0); 
?>


<?php
session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['uid3'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname3'], ENT_QUOTES, "UTF-8"));
//$username_sess =   htmlentities(htmlentities($_SESSION['username3'], ENT_QUOTES, "UTF-8"));
$photo_sess =  $_SESSION['photo3'];
$email_sess =  htmlentities(htmlentities($_SESSION['email3'], ENT_QUOTES, "UTF-8"));
$user_rank = strip_tags($_SESSION['user_rank3']);
$department_sess =  htmlentities(htmlentities($_SESSION['department3'], ENT_QUOTES, "UTF-8"));
$owner_id =  htmlentities(htmlentities($_SESSION['admin_id3'], ENT_QUOTES, "UTF-8"));
$admin_identity =  strip_tags($_SESSION['admin_id3']);


?>




<!DOCTYPE html>
<html lang="en">

<head>
 
<title> </title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<script>
$(document).ready(function(){






var userid_sess_data = '<?php echo $userid_sess ?>';
var fullname_sess_data = '<?php echo $fullname_sess ?>';
var username_sess_data = '<?php echo $userid_sess ?>';
var email_sess_data = '<?php echo $email_sess ?>';
var photo_sess_data = '<?php echo $photo_sess ?>';
var user_rank_sess_data = '<?php echo $user_rank ?>';



var rec = "<span>" +
"<img src='uploads/" + photo_sess_data +"'  style='text-align:left;border-radius:50%;width:60px;max-width:60px;height:60px;max-height:60px;border-style: solid; border-width:3px; border-color: orange;'>" +
 "</span>";

$('.myd_photo_sess').html(rec);
$('.myd_fullname_sess').html(fullname_sess_data);
$('.myd_userid_sess').html(userid_sess_data);
$('.myd_username_sess').html(username_sess_data);


//$('#myd_userid_sess_value').val(userid_sess_data).value;
//$('#myd_userid_sess_id').html(userid_sess_data);



});

</script>


<style>







/*ensure that category button does not jam about us or product section when on mobile ends here.*/




.section_padding {
padding: 60px 40px;
}

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
   background-color:#8B008B;

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

background: #8B008B;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}





/* home starts */
  
.home_image {	
width:100%;
/*
height:500px;
max-height:500px;
*/
height:100vh;
max-height:100vh;
       
        
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
background-color: #8B008B;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: #8B008B;
padding: 6px;
color:white;
}

/*
modal_mobile_resize 

@media screen and (max-width: 600px) {
  .modal_mobile_resize {
    width: 100%;
    margin-top: 15%;
  }
}


*/



.btn_copyright{
//background: orange;
color:orange;
//padding:2px;
font-weight:200;
}


.btn_copyright:hover {
background: black;
color:pink;
font-weight:700;
}




/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:#8B008B;
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



.left_shifting{

width:40%;
}

@media screen and (max-width: 768px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}


}



@media screen and (max-width: 600px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}

}

.modaling_sizing{
width:59%;
}


@media screen and (max-width: 768px) {
.modaling_sizing {
width:99%;

}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center;
}


}

@media screen and (max-width: 600px) {
.modaling_sizing {
width:99%;
}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center; 
}



}

.category_post{
background-color: #8B008B;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	



.category_post1{
background-color: #8B008B;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
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
background-color: #8B008B;
padding: 6px;
color:white;
font-size:14px;
border-radius: 20%;
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



<script>
// set post url

url_post_data ="";

</script>

    </head>
    <body>

 
</head>
<body>



<style>

.notify_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: green; padding: 2px 6px;font-size:14px; }
.notify_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:14px; }

</style>



<!-- start column nav-->

<script>

// stopt all bootstrap drop down menu from closing on click inside
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});


</script>


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





 <li class="navgate_no"><a title='Share Feedback Link' href="share_feedback_link.php" style="color:white;font-size:14px;"><button class="category_post1"><i  style="color:white;font-size:10px;" class="fa fa-link" aria-hidden="true"></i> Share Feedback Link</button></a>

 <li class="navgate_no"><a title='Feedback Sentimental Statistics' href="statistics.php" style="color:white;font-size:14px;"><button class="category_post1"><i  style="color:white;font-size:10px;" class="fa fa-bar-chart" aria-hidden="true"></i> Feedback Statistics</button></a>



 <li class="navgate_no">   
<a style='display:none;' title='Feedback Sentimental Calendar' href="calendaring.php" style="color:white;font-size:14px;"><button class="category_post1"><i  style="color:white;font-size:10px;" class="fa fa-calendar" aria-hidden="true"></i>Feedback Calendar</button></a>
</li> 

     




<!--start post comments  Call-->





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


<!--end post comments Call-->






<li class="navgate">

<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown">
  <span class='myd_photo_sess'></span>

More<span class="caret"></span></a>

<ul class="dropdown-menu">
<b style='color:black;'>(<span class='myd_fullname_sess'></span>)</b><br><br>
<li><a title='Logout' href="logout.php"><span style='font-size:30px;color:#8B008B;' class='fa fa-sign-out'></span> Logout</a></li>

</ul></span>

</li>



      </ul>



    </div>




  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->







<style>


.support_css{
//border-radius:25%;min-width:25vw;background:#c1c1c1; border-bottom: 2px dashed purple;
}

.support_css:hover{
background:white;color:black;
}



.senddata1_css{
background:#8B008B;
color:white;
cursor:pointer;
border:none;
padding:2px;
border-radius:20%;
text-align:center

}


.senddata1_css:hover{
background:orange;color:white;

}

.chat_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #34BB0C; padding: 2px 6px;font-size:14px; }
.chat_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:14px; }


</style>



<!--load A ends here-->


<br><br>







<!--start right column all-->
    <div class="right-column-all_NO>




<style>
.post_padding{
padding-top:-70px;
   
}

.post_bgcolor{
background: #dddddd;
   
}


@media screen and (max-width: 600px) {
  .post_padding{
  padding-top:1px; 
 margin-top:-170px
  }
}

@media screen and (max-width: 700px) {
  .post_padding{
 padding-top:1px;
 margin-top:-170px
  }
}


.postbtn_dashedline{
  border-bottom: 2px dashed #ec5574;

}



/* restrict responsive image to max size of 400px */
.responsive_image1 {
  width: 100%;
  max-width: 400px;
  height: auto;
}

.responsive_image2{
  width: 100%;
  height: auto;
}

.responsive_video {
  width: 100%;
height: 400px;
  max-width: 500px;
  max-height: 600px;
  //height: auto;
}


</style>
<!-- all post Section start -->
<div  class="post_padding section_padding post_bgcolor">


<!--start blog post row-->
 <div class="row">



<style>
.c_counter {
 padding:10px;
color:white;
background:purple;
border:none;
cursor:pointer;
}

.c_counter:hover {
color:white;
background:black;
}

.social_all{
 padding:6px;
color:white;
background:red;
border:none;
cursor:pointer;
border-radius:15%;

}

.s_icon {
color:white;
//background:black;
font-size:20px;
//border-radius:50%;
cursor:pointer;
}


.s_icon:hover {
color:white;
background:red;
}


</style>





</div>
<!--end blog post row-->


<!--start form post row-->
<div class="row">
<br>
<marquee><b style='font-family:comic sans ms;color:#800000;font-size:16px;'>(Your Fullname: <span class='myd_fullname_sess'></span>)</b></marquee>


<!--post start-->
<div class="blog_post_form col-sm-12 alerts alert-warning hide_this_form_on_submit_post" id="blog_tab1">

<!--form 1 starts-->
<div style="text-align:left;font-size:14px;font-family:verdana;color:black">


<style>
.map_css{
background: #8B008B;
color:white;
padding:4px;
cursor:pointer;
border:none;
border-radius:10%;
}

.map_css:hover{
background: black;
color:white;

}


.map_css1{
background: #ec5574;
color:white;
padding:6px;
cursor:pointer;
border:none;

}


.map_css1:hover{
background: #800000;
color:white;

}





.title_css{
//background: green;
color:#0088cc;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: #c1c1c1;
color:black
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: #c1c1c1;
color:black;
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



.cat_cssa{
background: #ec5574;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_cssa:hover{
background: black;
color:white;

}



</style>
      
</div>
<!--form 1 ends-->


</div>

<!--post end-->


</div>
<!--end form post row-->









<!-- Main Post Database query starts here -->





<!-- Main Post start -->




<div style="font-size:30px;color:#800000;" >
<center>Customers Feedback Reports Management System<br>

<button data-toggle='modal' data-target='#myModal_reports'  title='Click to Share Feedback'   class='invite_btn1'>
Click to Post/Send Feedback</button>
</center></div><br>







<br>
<style>

.action_css{
background:#ec5574;
color:white;
border:none;
padding:10px;
border-radius:10%;
}


.action_css:hover{
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


.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }

.myform_btn_css{

background:navy;
color:white;
border:none;
padding:10px;
border-radius:10%;
}


.myform_btn_css:hover{
background:orange;
color:black;


}

.s_css{
background:#ddd;
color:black;
padding:10px;
border:none;
cursor:pointer;
border-style: dashed; border-width:4px; border-color: #0088cc;
}


.s_css:hover{
background:orange;
color:black;
}



.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


.point_count2 { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: red; padding: 2px 6px;font-size:14px; }



.invite_btn1{
background-color: navy;
padding: 6px;
color:white;
font-size:24px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
padding:20px;
}
.invite_btn1:hover {
background: black;
color:white;
}
</style>




     

<script>

   $(document).ready(function(){
//$(".reloadPageFeedbackreport").click(function(){
$(document).on( 'click', '.reloadPageFeedbackreport', function(){ 

location.reload();

});

});





var owner_id = '<?php echo $userid_sess; ?>';
        var page_row_call =5;

        $(document).ready(function(){

            loadFeedbackReport();

$("#loader_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Loading Content <i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');


            $("#loadmore_btn").click(function(){



  var report_id = $("#report_id").val();
                var queryid = Number($("#form_queryid").val());
                var querytotal = Number($("#form_querytotal").val());
                queryid += page_row_call;
                if(queryid <= querytotal){
               
                    $("#form_queryid").val(queryid);
                    loadFeedbackReport();
                }

                if(queryid >= querytotal){
               
                   alert('No More Content to Load');
$("#nomore_content_check").html("<div style='background:purple;color:white;padding:10px;'>No More Content to Load <br> <center><button style='background:#3b5998;border:none;color:white;padding:10px;cursor:pointer' title='Refresh Page' class='reloadPageFeedbackreport'>Refresh Page</button></center> </div>");   
$('#loader_post').hide();
                }


            });
        });

        function loadFeedbackReport(){
            var queryid = $("#form_queryid").val();
            var querytotal = $("#form_querytotal").val();
            

$("#loader_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Loading Feedback Reports <i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');

            $.ajax({
                url:'myfeedbackreport_load.php',
                type:'post',
                data:{queryid:queryid,page_row_call:page_row_call, owner_id:owner_id},
                dataType:'json',
                success:function(response){

//alert(response);

if(response ==11){
//alert('No Feedback has been Shared by you or your Customers yet');
$("#pcheck").html("<div style='background:red;color:white;padding:10px;'>No Feedback has been Shared by you or Your Customers Yet</div>");   
$("#loader_posts").hide();
return false;
}
           

                    loadAllContent(response);

$("#loader_posts").hide();
//$("#result_posts1").html(response);
//setTimeout(function(){ $('#result_posts').html(''); }, 5000);	




//hide issue details on page load
        //$(document).ready(function(){
           // $(".issueDetailsHide").hide();
            //$("[id^='issueDetailsHide_']").hide("");
        //});



                }
            });

        }

        function loadAllContent(data){

            var len1 = data.length;



            for(var i=0; i<len1; i++){
                if(i == 0){
                    var querytotal = data[i]['allcount'];
                    $("#form_querytotal").val(querytotal);
                }else{



var reportid = data[i]['reportid'];
var report_id = reportid;
var title = data[i]['title'];
var description = data[i]['description_default'];

var timer1 = data[i]['timer1'];
var timer2 = data[i]['timer2'];
var fullname = data[i]['fullname'];
var userphoto = data[i]['userphoto'];
var userid = data[i]['userid'];
var total_comments = data[i]['total_comments'];
var status = 'Open';
var priority= 'High';

var sentiment = data[i]['sentiment'];
var positivity = data[i]['positivity'];
var negativity = data[i]['negativity'];
var neutrality = data[i]['neutrality'];
var emotion_img = data[i]['emotion_img'];


if(sentiment == 'positive'){
var confidence =positivity;
var confidence1 ='Happy';

var confidence_percentage = confidence * 100;
//alert(confidence_percentage);

}


if(sentiment == 'negative'){
var confidence =negativity;
var confidence1 ='Sad';

var confidence_percentage = confidence * 100;
//alert(confidence_percentage);

}


if(sentiment == 'neutral'){
var confidence =neutrality;
var confidence1 ='Mild';


var confidence_percentage = confidence * 100;
//alert(confidence_percentage);


}




var rec = "<div  class='well'  id='contents_data' >" +  
        

"<img style='border-style: solid; border-width:3px; border-color:#3b5998; width:60px;height:60px; max-width:60px;max-height:60px;border-radius: 50%;' src='uploads/" + userphoto +"' />" +


  "<div style='font-size:14px;color:black;'><b>Feedbacked By:</b> " + fullname + "</div><br />" +


//"<div style='color:black;font-family:comic sansms;font-size:16px'><b>Feedback Reports Title: </b>"+title+"</div><br>" +

"<div style='display:none;' align='center'>"+report_id+"<input type=text name='report_id' id='report_id' value='"+title+"'></div>" +
  
"<div style='color:black;font-family:comic sansms;font-size:16px'><b>Feedback Topic: </b>"+title+"</div><br>" +
 "<div class='title_css1'><b>FeedBack Reports:</b> " + description + "</div>" +



  "<div style='background:#c1c1c1;color:black;'><b style='color:#800000'>Feed Back Sentimental Analysis</b>" +
 "<div class='title_css1'><b>Sentiment: </b> " + sentiment + "</div>" +
 "<div class='title_css1'><b>Positivity: </b> " + positivity + "</div>" +
 "<div class='title_css1'><b>Negativity: </b> " + negativity + "</div>" +
"<div class='title_css1'><b>Neutrality: </b> " + neutrality + "</div>" +
 "<div class='title_css1'><b style='color:#800000;font-size:16px;'>Analyzed Feedback Sentimental Tags: &nbsp;</b> " + sentiment + "&nbsp;&nbsp;&nbsp;<b style='color:#800000;font-size:16px;'>Confidence:</b> " + confidence_percentage + " %</div>" +

"<div>" +
"The Customer/User is <b>(" + confidence1 + ")&nbsp;&nbsp;</b><img src=" + emotion_img +"  style='width:60px;max-width:60px;height:60px;max-height:60px;border-style: solid; border-width:3px; border-color: orange;border-radius:50%'>" +

"<br><div style='color:purple;cursor:pointer;color:white;background:#800000;padding:6px;' data-toggle='modal' data-target='#myModal_action_sentiments'  title='Analyze Feedback Sentiments in Details' data-feedback=\""+ description +"\"  data-id=\""+ reportid +"\" data-fullname=\""+ fullname +"\"  data-userid=\""+ userid +"\" data-photo=\""+ userphoto +"\" data-title=\""+ title +"\"  data-status=\""+ status +"\" data-priority=\""+ priority +"\"  class='btn_action_updateReports mshow_btn pull-right'><span style='font-size:20px;color:black;' class='fa fa-plus-globe'></span> Analyze Feedback Sentiments in Details </div>"+   



 "</div>"+




 "</div>" +



  "<span><b> <span style='color:#3b5998' class='fa fa-calendar'></span>Time:</b> </span>" +
"<b><span data-livestamp='" + timer1 + "'></span></b>"+

"<span >( " + timer2 + ")</span><br /><br />" +


" <span class=''><label><a title='Comments/Reply' href='report_comments.php?pid="+ reportid +"'  style='font-size:20px;color:#3b5998;cursor:pointer;' class='fa fa-comments'></a></label>"+
"Comments (<span> " + total_comments + "</span>)</span>"+



"<a style='' title='Reply/Comments on Reports' href='report_comments.php?pid="+ reportid +"'  class='btn_action pull-right action_css'><span style='font-size:20px;color:black;' class='fa fa-comments'></span> Comments/Send Email Thanks on Feedback</a><br>"+



"<br><br><div class='row'>"+



"</div>"+


"<div style='background:#eeeeee'>" +
"</div></div>";

 $("#res_FeedbackReport").append(rec);

$("#loader_posts").hide();

                }
            }
        }



// loading Feedback Reports ends here






//Feedback Reports updates

$(document).ready(function(){
//$('.btn_action_updateReports').click(function(){
$(document).on( 'click', '.btn_action_updateReports', function(){ 

var reportid = $(this).data('id');
var title = $(this).data('title');
var userid = $(this).data('userid');
var feedback = $(this).data('feedback');



$('#title11').html(title);
$('#title12').html(title);
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


   














<!-- start loading Feedback Reports --->
<br />
<div id="content">
   
   
  
        <div id="res_FeedbackReport"></div>
<div id="nomore_content_check"></div>
<div id="loader_check"></div>
<div id="result_check"></div>


<div id="pcheck"></div>

        <div id="">
            <input type="hidden" id="form_queryid" value="0" />
            <input type="hidden" id="form_querytotal" value="0" />

<div id="loader_posts"></div><br>
<input type="button" style='width:100%' title='LoadMore Feedback Content' class="button myform_btn_css" value="LoadMore Feedback Content" id="loadmore_btn" />
 
        </div>
    </div>




<!-- Main Post ends -->


<!-- Main Post Database query ends here-->





</div>
<!--all post section ends-->







<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">
        <div class="col-sm-12">
<p class="footer_text1"><span class='myd_title_header'></span></p>
<p class="footer_text2"><span class='myd_title_footer'></span></p>
<br>

        </div>



        </div>

<br/>
  <p></p>
</footer>

<!-- footer Section ends -->
	




<div>
  <!--end right column all-->    























<script>

// clear Modal div content on modal closef closed
$(document).ready(function(){
$('#myModal_action_issue').on('hidden.bs.modal', function() {
//alert('Modal Closed');
   $('.myform_issue').empty();  
 console.log("modal closed and content cleared");
 });
});

</script>






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











   
</body>
</html>











<script>

// clear Modal div content on modal closef closed
$(document).ready(function(){
$('#myModal_reports').on('hidden.bs.modal', function() {
//alert('Modal Closed');
   $('.myform_issue').empty();  
 console.log("modal closed and content cleared");
 });
});

</script>



<!--  report Modal starts here --->


<div class="container_action">

  <div class="modal fade " id="myModal_reports" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing">
      <div class="modal-content">
        <div class="modal-header" style='color:black; background:#ddd'>
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>

          <h4 class="modal-title">Customers Feedback Reports Management System</h4>
        </div>
        <div class="modal-body">
          



<!-- form START -->





<!-- start pForm  -->


<div style='background:#f1f1f1; padding:16px; color:black'>


<center><h4>Create Feedback Reports.</h4></center>

<br>

Please Tell us what you Feel about our Products, the Price, Our Services, Our design. Just Tweet Your Feedback on what ever
you feel. We will get back to you in the Comment Section</b>
<!--start form1-->

<script>

$(document).ready(function(){
$('#post_btn').click(function(){
		
var title = $('#title').val();
var description = $("#description").val();
var report_date = $("#report_date").val();

if(title==""){
alert('Feedback Reports Topic cannot be Empty');
//return false;
}


else if(description==""){
alert('Feedback Reports Description cannot be Empty');
//return false;
}



else if(report_date==""){
alert('Feedback Report Date cannot be Empty');
//return false;
}



else{

$('#loader_l2').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait,Feedback  Reports  is being created...</div>');
var datasend = {title:title, description:description, report_date:report_date};	
		$.ajax({
			
			type:'POST',
			url:'feedback_reports.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){




if(msg == 22){


 alert('There is an Issue Making Sentimentals API Call ..Please Check Internet Connections.');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:red;padding:10px;'>There is an Issue Making Sentimentals API Call. Please Check Internet Connections</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);				
			
}




if(msg == 1){


 alert('Feedback Reports Successfully Created..');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:green;padding:10px;'>Feedback Reports Successfully Created</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);


location.reload();
//window.location='dashboard.php';				
			
}else{

alert('Feedback Reports submission Failed.');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:red;padding:10px;'>Feedback Reports submission Failed</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);				
	

}




			
			}
			
		});
		
		}
		
	})
					
});




</script>






<div class="col-sm-12 form-group">
<label>Select Feedback by Topic </label>

<select class="form-control contact_input_color" id="title" name="title" required>
<option value=''>--Select Feedback Category</option>
<option value='Products'>Products</option>
<option value='Design'>Design</option>
<option value='Bugs'>Bugs</option>
<option value='Pricing'>Pricing</option>
<option value='Supports'>Supports</option>
<option value='Others'>Others</option>
</select>
</div>





<div class="col-sm-12 form-group">
<label>Enter Your Feedback</label>
<textarea  class="desc form-control contact_input_color" id="description"  name="description" placeholder="Enter Feedback"  required></textarea>
</div>



<div class="col-sm-12 form-group">
<label>Feedback Reporting Date</label>
<input  class="form-control contact_input_color" id="report_date" name="report_date" placeholder="Report Date" type="date" required>
</div>


<br>





<div class="col-sm-12 form-group">
                        <div id="loader_l2"></div>
                        <div id="result_l2"></div>
</div>


<button type="button" id="post_btn" class="post_btn category_post"  /> Submit Feedback Reports</button>
</div>







<!--end form1-->


<br><br>
</div>




</div>



<!--   end pForm  -->








<br /><br />
<br /><br />
<br /><br />
</div>

<!--   form ENDS   -->



        </div>
        <div class="modal-footer modal_footer_color" style={{color:'black',background:'#ddd'}}>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



<!--  report Modal ends here  -->

















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



















