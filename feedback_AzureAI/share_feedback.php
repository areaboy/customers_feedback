<?php

$admin_identity =  strip_tags($_GET['owner_id']);
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

<li class="navgate img-rounded"><a  class="img-rounded access" href="index.php">Home</a></li>




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


<?php

include('data6rst.php');

$owner_id = strip_tags($_GET['owner_id']);
$cct = $db->prepare('select * from users where admin_id=:admin_id');
$cct->execute(array(':admin_id' =>$owner_id));
$rct_row = $cct->fetch();

$uid = $rct_row['id'];
$fullname = $rct_row['fullname'];
$photo = $rct_row['photo'];

?>

      




<div class='row'>
<div class='col-sm-6'>


</div>


<div class='col-sm-12'>


<b>Admin Info:</b><br>
Name: <?php  echo $fullname; ?><br>
<img src='uploads/<?php  echo $photo; ?>' style='width:260px;max-width:260px;height:260px;max-height:260px;border-style: solid; border-width:3px; border-color: orange;border-radius:50%'>
</div>




<div class='col-sm-0'>
</div>


<div class='col-sm-12 ' style='background:#ddd;'>








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
var admin_identity ="<?php echo $admin_identity; ?>";


var fullname = $('#fullname').val();
var email = $('#email').val();


if(fullname==""){
alert('Customers Fullname cannot be Empty');
//return false;
}


else if(email==""){
alert('Customers Email Address cannot be Empty');
//return false;
}


else if(title==""){
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
var datasend = {title:title, description:description, report_date:report_date,admin_identity:admin_identity, fullname:fullname, email:email};	
		$.ajax({
			
			type:'POST',
			url:'feedback_reports2.php',
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


 alert('Feedback Reports Successfully Sent..');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:green;padding:10px;'>Feedback Reports Successfully Sent</div>");
//setTimeout(function(){ $('#result_l2').html(''); }, 5000);


//location.reload();
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
<label>Customers Fullname</label>
<input  class="form-control contact_input_color" id="fullname" name="fullname" placeholder="Customers Fullname" type="text" required>
</div>


<div class="col-sm-12 form-group">
<label>Customers Email</label>
<input  class="form-control contact_input_color" id="email" name="email" placeholder="Customers Email" type="text" required>
</div>

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


<button type="button" id="post_btn" class="post_btn category_post"  /> Send Feedback Reports</button>
</div>







<!--end form1-->









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