﻿<!DOCTYPE html>
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

function imagePreview(e) 
{
 var readImage = new FileReader();
 readImage.onload = function()
 {
  var displayImage = document.getElementById('imageupload_preview');
  displayImage.src = readImage.result;
 }
 readImage.readAsDataURL(e.target.files[0]);
}


            $(function () {
                $('#save_btn').click(function () {
                    //var username = $('#username').val();
                    var email = $('#email').val();
                    var phone_no = "+123";
                    var fullname = $('#fullname').val();
                    var file_fname = $('#file_content').val();
                    var user_rank = $('#user_rank').val();
                    var emailaddress_pot = $('#emailaddress_pot').val();
                    var country = 'USA';

                    //preparing Email for validations
                    var atemail = email.indexOf("@");
                    var dotemail = email.lastIndexOf(".");
 var password = $('#password').val();
var confirm_password =$('#confirm-password').val();


if(password != confirm_password){
alert('Password Does not Match');
return false;
}


// start if validate
if(file_fname==""){
alert('please Select File to Upload');
}

else if(email==""){
alert('please Enter Email Address');
}

else  if (atemail < 1 || ( dotemail - atemail < 2 )){
alert("Please enter valid email Address")
}


else if(password==""){
alert('please Enter Password');
}

else if(phone_no==""){
alert('please Enter Phone No.');
}

else if(fullname==""){
alert('please Enter Your Fullname');
}

else if(user_rank==""){
alert('please Select Status');
}


else if(country==""){
alert('please Select Your Country');
}


else{

var fname=  $('#file_content').val();
var ext = fname.split('.').pop();
//alert(ext);

// add double quotes around the variables
var fileExtention_quotes = ext;
fileExtention_quotes = "'"+fileExtention_quotes+"'";

 var allowedtypes = ["PNG", "png", "gif", "GIF", "jpeg", "JPEG", "BMP", "bmp","JPG","jpg"];
    if(allowedtypes.indexOf(ext) !== -1){
//alert('Good this is a valid Image');
}else{
alert("Please Upload a Valid image. Only Images Files are allowed");
return false;
    }

          var form_data = new FormData();
          form_data.append('file_content', $('#file_content')[0].files[0]);
          form_data.append('file_fname', file_fname);
          form_data.append('email', email);
          form_data.append('fullname', fullname);
          form_data.append('emailaddress_pot', emailaddress_pot);
          form_data.append('phone_no', phone_no);
          form_data.append('user_rank', user_rank);
 form_data.append('password', password);



                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
                    $('#loader').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Your Data is being Submitted</span>');
                    $.ajax({
                        url: 'signup_action.php',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                        xhr: function () {
                      //var xhr = new window.XMLHttpRequest();
                            var xhr = $.ajaxSettings.xhr();
                            xhr.upload.addEventListener("progress", function (event) {
                                var upload_percent = 0;
                                var upload_position = event.loaded;
                                var upload_total  = event.total;

                                if (event.lengthComputable) {
                                    var upload_percent = upload_position / upload_total;
                                    upload_percent = parseInt(upload_percent * 100);
                                  //upload_percent = Math.ceil(upload_position / upload_total * 100);
                                    $('.upload_progress').css('width', upload_percent + '%');
                                    $('.upload_progress').text(upload_percent + '%');
                                }
                            }, false);
                            return xhr;
                        },
                        success: function (msg) {
                                $('#box').val('');
				$('#loader').hide();
				$('.result_data').fadeIn('slow').prepend(msg);
$('.result_data_new').fadeIn('slow').prepend(msg);
				$('#alertdata_uploadfiles').delay(5000).fadeOut('slow');
                                $('#alerts_reg').delay(5000).fadeOut('slow');
                                $('#alertdata_uploadfiles2').delay(20000).fadeOut('slow');
                                $('#save_btn').removeAttr('disabled');


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (Successful) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/Successful/g) || []).length;
//alert(bcount);

if(bcount > 0){
$('#file_fname').val('');
$('#email').val('');
$('#fullname').val('');
$('#password').val('');
}




                        }
                    });
} // end if validate
                });
            });




// start checking for email availability
$(document).ready(function(){
    $('#email').keyup(function(){ 
       var email = $('#email').val();
 if(email.length < 2) {
// ensure that user must type something first at least 2 characters before fetching database records
return false;
}
       var token = 101201;
        var ShowResult1 = $('#email_check');
            ShowResult1.html('<font color=green>Checking Email Availability...</font> <img src="loader.gif" align="absmiddle"> '); // you can use loading animation here
           var datasend = "email="+ email + "&token=" + token;
            $.ajax({
            type : 'POST',
            data : datasend,
            url  : 'email_check.php',
            success: function(data){

                if(data == 0){
  ShowResult1.html('<br><span class="well alert alert-success"><font color=green>This Email Address <b>('+email+')</b> is Available</font></span>');
                }
                else if(data > 0){
  ShowResult1.html('<br><span class="well alert alert-warning"><font color=red>This Email Address <b>('+email+')</b> is Taken....</font></span>');
                }
                else{
  ShowResult1.html('<br><span class="well alert alert-warning"><font color=red>We have problem with your Query.</font></span>');
                }
            }

            });
    });
});

// end checking for email availability

        </script>


<style>
.upload_progress{
padding:10px;
background:green;
color:white;
cursor:pointer;
min-width:30px;
}

#imageupload_preview
{
max-height:200px;
max-width:200px;
}
</style>
 
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


<center><p class="" style='font-size:36px;color:#8B008B;font-family:comic sans ms;'>Feedback-AI</p></center>


<div class='row'>
<div class='col-sm-12' style='font-size:18px;'>
<b></b>
</div>
</div><br>



<div class='row'>


<div class='col-sm-0'>
</div>


<div class='col-sm-12 ' style='background:#ddd;'>

  <h2 class="text-center"><span class="contact_name_color" style='font-size:20px;color:#8B008B;font-family:comic sans ms;'>
Admin Account Creations</span></h2>
<!--start form-->
<form id="" method="post" class='result_hide'>

<div class="form-group">
<label style="">Select Profile Photo: </label>
<input style="background:#c1c1c1;" class="col-sm-12 form-control" type="file" id="file_content" name="file_content" accept="image/*" onchange="imagePreview(event)" />
 <img id="imageupload_preview"/>
</div><br>


 <div class="form-group">
              <label style="" for="email">
<span class="fa fa-envelope-o"></span>Email</label>
              <input type="text" class="col-sm-12 form-control" id="email" name="email" placeholder="Enter email">
<div class="result1" id="email_check"></div>
            </div><br>

 <div class="form-group">
              <label style="padding:6px;font-size:16px;" for="psw">
<span class="fa fa-eye"></span> Password</label>
              <input type="password" class="col-sm-12 form-control" id="password" name="password" placeholder="Enter password">
            </div>

 <div class="form-group">
              <label style="padding:6px;font-size:16px;" for="psw">
<span class="fa fa-eye"></span> Confirm Password</label>
              <input type="password" class="col-sm-12 form-control" id="confirm-password" name="confirm-password" placeholder=" Confirm Password">
            </div>




 <div style='display:none;' class="form-group">
              <label style="" for="phone"></label>
<span class="fa fa-phone"></span>Contact No.(The Phone must start with your Coutry Codes eg +123.......)
              <input type="text" class="col-sm-12 form-control" id="phone" name="phone" placeholder="Enter Contact No.">

            </div><br>

       <input type="hidden" class="col-sm-12 form-control" id="phone" name="phone" value="+123">

<style>
.secured_pot{ display:none; } /* hide because is spam protection */
</style>
<input class="secured_pot" type="text" name="emailaddress_pot" id="emailaddress_pot" />




<div class="form-group">
              <label style="" for="fullname">
<span class="fa fa-male"></span> FullName</label>
              <input type="text" class="col-sm-12 form-control" id="fullname" name="fullname" placeholder="Enter Full Name">
            </div>



<div class="form-group">
              <label style="" for="user_rank">
<span class="fa fa-globe"></span> Status</label>
<select class="col-sm-12 form-control" id="user_rank" name="user_rank">

<option value='Admin'>Admin</option>


</select>

</div>







                    <div class="form-group">
                            <div class="upload_progress" style="width:0%">0%</div>

                        <div id="loader"></div>
                        <div class="result_data"></div>
                    </div>

                    <input type="button" id="save_btn" class="pull-right register_btn" value="Register" />
                </form>

<!--end form-->


<div class="result_data_new"></div>



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



















