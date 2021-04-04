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
 <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<script src="typingdna.js" type="text/javascript"></script>


<style>


.register_btn{
padding:10px;
color:white;
background:#8B008B;
border:none;
cursor;pointer;

}


.register_btn:hover{
background:black;
color:orange;
}



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

.navgate101:hover{
background:#8B008B;
color:black;

}






/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:#8B008B;
    //color:white;
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


.contact_info{

background:#8B008B;
color:white;
cursor: pointer;
padding:16px;
border-radius: 10%;

}
.contact_info:hover{
background: orange;
color:black;

}


.contact_info_dashedline{
  border-bottom: 5px dashed #8B008B;

}


.category_post{
background-color: #8B008B;
padding: 16px;
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


.access{
border-style: solid; border-width:4px; border-color:white;color:white;font-size:14px;
}

.access:hover{
color:black;

}


</style>






        




        <script>


        </script>


 
</head>
<body>


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

<li class="navgate img-rounded"><a  class="img-rounded access" href="dashboard.php">Back to Dashboard</a></li>




      </ul>

    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->






    <div class="">


<!-- about Section start-->
<div  class="about section_padding aboutus_bgcolor" style=''>

<br>


<center><p class="" style='font-size:36px;color:#8B008B;font-family:comic sans ms;'>Customers FeedbackAI</p></center>


<div class='row'>
<div class='col-sm-12' style='font-size:18px;'>
<b></b>
</div>
</div><br>


      




<div class='row'>


<div class='col-sm-12'>


<b>Your Info:</b><br>
Name: <?php  echo $fullname_sess; ?><br>
<img src='uploads/<?php  echo $photo_sess; ?>' style='width:60px;max-width:60px;height:60px;max-height:60px;border-style: solid; border-width:3px; border-color: orange;border-radius:50%'>
</div>




<div class='col-sm-12'>
<h2> Your Customers  Feedback Shareable Links</h2><br>

Anyone or Customers with this link can send you a Products Feedbacks Updates. You can send the links to your Customers via <b>Email, sms, Whatsapp, Facebook etc.</b>
<br><br>


<a target="_blank" title='Share Feedback Link' href="share_feedback.php?owner_id=<?php echo $admin_identity; ?>" style="color:purple;font-size:20px;"><i  style="color:purple;font-size:20px;" class="fa fa-link" aria-hidden="true"></i> http://localhost/azure_final/feedback_AzureAI/share_feedback.php?owner_id=<?php echo $admin_identity; ?></a>


</div>


<div class='col-sm-12 ' style='background:#ddd;'>















</div>




</div>





</div>








<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">

        <div class="col-sm-12">
<p class="footer_text1"></p>
<p class="footer_text2"></p>

<br>


        </div>

 
</div>



</div>

<div class="footer_text1">
<p class="footer_text1"></p>
</div>


<div class="footer_dashedline"></div>

 </footer>

<!-- footer Section ends -->
	




<div>
 

   
</body>
</html>



















`