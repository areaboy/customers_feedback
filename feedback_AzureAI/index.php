<!DOCTYPE html>
<html lang="en">

<head>
 <title><?php include('header_title.php'); echo $header_tit; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>



<style>


/* navigation */


.left-column-all {
    overflow-x: hidden;
    position: fixed;
    z-index: 9999;
    width:50vw;
    height: 100vh;
    background: url(home.jpg) center no-repeat purple;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;

/*
    margin-top: 0px;
    margin-left: 0px;
    */
}



@media screen and (max-width: 1440px) {
.left-column-all {
width:100vw;
width:100vh;

}

}
	
.right-column-all {
 margin-left:40vw;
/*
margin-left:47vw;
*/
}

@media screen and (max-width: 800px) {
.left-column-all {
    width: 100vw;
    position: inherit;
    background-position: inherit;
}

.right-column-all {
    margin-top: 0px;
margin-left: 0px;

}
}




/*ensure that category button does not jam about us or event section when on mobile start here. you can remove it if you
like. this will make product contain maximum of 8 categories button*/
@media screen and (max-width: 768px) {
.left-column-all {
   padding-bottom:700px;
}
}

@media screen and (max-width: 600px) {
.left-column-all {
   padding-bottom:700px;

}
}

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
background:800000;
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

.home_content_head {
        color: white;
        font-size:40px;
        font-weight:bold;
	font-family:comic sans ms; 
width:40vw;
margin-left:-110px;
  
}

.home_content_text {
        color: white;
        font-size:20px;
        font-weight:bold;
	box-sizing: border-box;
      //position: relative;
        
}

.home{
background:#ec5574;
}

.home:hover{
box-shadow: inset 0 0 0 25px purple;

}


.home_text_transparent_home {
border-style: solid; border-width:1px; border-color: orange;
  width: 100%;
  padding: 90px;
  position: absolute;
  bottom: 0px;
  background: rgba( 0, 0, 0, 0.50);

  color: white;
  height:100%;
text-align: center;

}



@media screen and (max-width: 768px) {
  .home_text_transparent_home{

  width: 100%;
  padding: 20px;
  }
}



@media screen and (max-width: 600px) {
  .home_content_home{
  width: 100%;
  padding: 20px  
  }
}













.marquee_button{
background-color: #800000;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
transform: skew(15deg);
border: none;
cursor: pointer;
text-align: center;



}
.marquee_button:hover {
background: black;
color:white;
}


.marquee_image{ 
width:60px;height:60px;
border-radius: 50%;
border-style: solid; border-width:2px; border-color: #800000;
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


.contact_info{

background: #800000;
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
  border-bottom: 5px dashed #800000;

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
background-color: #800000;
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




.category_post1{
background-color: purple;
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

.category_post1:hover {
background: black;
color:white;
}	



</style>



 
</head>
<body>






















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

        <li class="navgate about_click">Home</li>
       
       
        <li class="navgate contact_click">About Our App</li>
        



      </ul>


    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->






<div class="home_text_transparent_home" >
<div class="home_resize_padding"> 


<p class="home_content_head pull-left"><?php include('header_title.php'); echo $header_tit; ?></p>
<marquee> <p class=""><button class="contact_click marquee_button"><img class="marquee_image" src="home.jpg" /><?php include('header_title.php'); echo $header_tit; ?></button> </p></marquee>

                        <p class="home_content_text access2"><span>Accessibility For Admin


<br><br>
<style>

.access2{
border-style: dashed; border-width:4px; border-color:orange;color:white;font-size:14px;
}

.access{
border-style: solid; border-width:4px; border-color:white;color:white;font-size:14px;
}

.access:hover{
color:black;

}


.dropdown_color:hover{
background: black;
color:white;

}
</style>



<a  class="category_post1" href="admin_signup.php" title="Admin Signup" >Admin Signup</a>
<br><br><br>
<a  class="category_post1" href="login.php" title="Admin  Login" >Admin  Login</a>
<br><br>

</p>








<br> 
     
</div> 
</div>


    </div>
<!--end left column all-->












<!--start right column all-->
    <div class="right-column-all">




















<!-- about Section start-->
<div  class="about section_padding aboutus_bgcolor" style=''>


  <h2 class="text-center"><span class="contact_name_color">About <?php include('header_title.php'); echo $header_tit; ?></span></h2>
  <p class="footer_text2"><?php echo $heading; ?> </p>
<img style="width:100%;min-width:100%;max-width:100%;height:400px;" src="home1.jpg">

<style>
.hh{
color:#800000;
}

.hh:hover{
color:black;
}
</style>
  <h2 class="text-center"><span class="contact_name_color hh">Powered by <?php echo $poweredby; ?>.</span></h2>


</div>




<!-- about Section ends-->









<!-- Contact Section start-->
<div  class="contact  section_padding contact_bgcolor" >
  <h2 class="text-center">About Customers Feedback AI</h2>
  

<h2> Inspiration</h2>
Products Sellers and their various Customers Feedback reports about their products/items are scattered all over
 the internet as most of the feedback form reports are sent and shared over Email which might be difficult to track and access
in future.<br> To this effect, there is a
need to warehouse all the Customers Feedback reports to a certain database so that the Products seller can get back to his
Customers needs and wants as indicated in the Feedback Products reports anytime anyday.<br><br>

As a Brands/Products Sellers, Understanding your Customers needs is very important for progress of your business.
To this effect, there is a serious need to monitor Posts, comments, reviews and products sentiments in every of your
 customers feedback reports to ensure continual business smoothness, Sellers-Customers good relationship and perhaps 
increase in products sales.<br><br>



<b>Customers Feedback AI</b> was designed for building an amazing business relationship between Products Sellers and their Customers thus facilitating more products 
Sales Powered by Azure Cognitive Text-Analytics AI.<br><br>



The application uses <b>Azure Cognitive Services via Text Analytics Sentimental Opinion Mining API</b> to detect and analyze the 
customers Products feedback to determine if the Feedback is <b>Positive(Happy Mood), Negative(Sad Mood) and Neutral(Mild Mood)</b><br><br>

<b>https://mytextanalyticsapp101.cognitiveservices.azure.com/text/analytics/v3.1-preview.3/sentiment?opinionMining=true</b>
<br><br>


<h2> What It Does</h2>

The Application allows the <b>Products Admin or Products Sellers</b> to register,login and then send/share their Services, 
Brands or Products feedback form links to their respective Customers Eg. either
via <b>Email, SMS, Whatsapp etc.</b><br>

Any Customer with that shared Feedback Form link can send/post a feedback reports about the services, Brands or the Products back to
the said Brands/Products Sellers.
<br><br>

The Products Sellers from the Web applications can then View and analyzed each of their Customers Products Feedbacks 
sentimentally via <b>Azure Cognitive Services  by leveraging Text-Analytics Sentimental Opinion Mining API</b><br><br>


Each Time a Customers posts a Feedback reports about certian Services to the Admin or Products Sellers, 
 the application will trigger a Real-time Notifications Alerts Counts to inform the Products Seller about the updates. 

The Feedback Reports is processed by the venerable <b>Azure Text-Analytics Sentimental API</b> in other to determine the Feedback <b>Mixtivity, Positivity, Negativity or Neutrality</b> 
which helps the <b>Admin/Products Sellers</b> in analyzing Customers moods <b>(Happy, Sad, Mild etc.)</b> and needs about a 
certain products.<br><br>

The Products Sellers upon reception of Customers Products Feedback reports can send a <b>Thank You Message</b> 
to said Customer via the Customers email addresses from the feedback posts comment sections.<br><br>


The aplications also has Feedback Sentimental Statistical Chart System.

Each time a Customer Posts a Feedback Reports to a particular Products Seller, 
the Statistical database for that Products Sellers gets incremented by one(1) points depending on the Feedback Topics selected Eg:
 <b>(Eg. Supports,Design,Bugs etc.)</b><br>

 This Chart Satistical System help the Admin/Products
Sellers to analyze and visualize various Sentiments about their various Customers Brands/Products Feedback reports over time.<br><br>

For Instance, We plotted a Chart visualization to compare and visualize<br>
A.) Total Sentiments vs Positive Sentiments Vs Negative Sentiments vs Neutral Sentiments in every Customers Feedback reports
 over Time.<br>
B.) Feedback Sentiments Vs Products Topics/Category(Eg. Supports,Design,Bugs etc.) Over Time.
<br><br>



</div>




<!-- Contact Section ends-->






<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">

        <div class="col-sm-12">

<p class="footer_text1"><?php echo $header_tit; ?></p>
<p class="footer_text2"><?php include('footer_title.php'); echo $footer_tit1; ?></p>
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
  <!--end right column all-->    











<script>

        $(document).ready(function (){
           
           $(".home_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".home").offset().top
                }, 1200);
            $('.collapse').collapse('hide');
            });

            $(".about_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".about").offset().top
                }, 1200);
            $('.collapse').collapse('hide');
            });


            $(".services_click").click(function (e){
             //prevent page reload
             e.preventDefault();
             $('html, body').animate({
             scrollTop: $(".services").offset().top
                }, 1200);
            $('.collapse').collapse('hide');
            });

           

            $(".portfolio_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".portfolio").offset().top
                }, 1200);
             $('.collapse').collapse('hide');
            });


             
        

             $(".contact_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".contact").offset().top
                }, 1200);

            $('.collapse').collapse('hide');

            });


             $(".qualification_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".qualification").offset().top
                }, 1200);
             $('.collapse').collapse('hide');
            });

 $(".experience_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".experience").offset().top
                }, 1200);
             $('.collapse').collapse('hide');
            });

 $(".team_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".team").offset().top
                }, 1200);
$('.collapse').collapse('hide');
            });
    

$(".testimonial_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".testimonial").offset().top
                }, 1200);
$('.collapse').collapse('hide');
            });



$(".appointment_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".appointment").offset().top
                }, 1200);
$('.collapse').collapse('hide');
            });

$(".pricing_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".pricing").offset().top
                }, 1200);
$('.collapse').collapse('hide');
            });



$(".pride_click").click(function (e){
              //prevent page reload
              e.preventDefault();
              $('html, body').animate({
              scrollTop: $(".pride").offset().top
                }, 1200);
$('.collapse').collapse('hide');
            });
    

$(".newsletter_click").click(function (e){
              //prevent page reload
              e.preventDefault();            
$('.collapse').collapse('hide');
            });

$(".blog_click").click(function (e){
              //prevent page reload
              e.preventDefault();            
$('.collapse').collapse('hide');
            });
    



        });
 

//show modal cv on page load

 $(window).on('load',function(){
        $('#myModal_newsletter').modal('show');
    });



</script>

   
</body>
</html>



















