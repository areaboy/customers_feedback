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



?>





<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title></title>
    <style>
    
      #map {
        height: 80%;
      }
    
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>



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






<style>



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

background: #ec5574;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}



.res_center_css{
position:absolute;top:50%;left:50%;margin-top: -50px;margin-left -50px;width:100px;height:100px;
}


</style>

<html>
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



             <li class="navgate"> <span class='myd_photo_sess'></span>
<span class='myd_fullname_sess'></span></li>
        
<li class="navgate"><a  href="dashboard.php" class='img-circle' style="border-style: solid; border-width:4px; border-color:orange;color:white;font-size:14px;">Dashboard</a></li>
 
        <li class="navgate"><a  href="logout.php" style="color:white;font-size:14px;">logout</a></li>
      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->





<style>
/*
body {
    width: 660px;
    margin: 0 auto;
}
*/
</style>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script type="text/javascript">  

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(column_chart);
//google.charts.setOnLoadCallback(line_chart);
function column_chart() {

$('#loader1').fadeIn(400).html('<div style="background:#ddd;color:black;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp; &nbsp;Please Wait, Vaccine Statistics is being Loaded.</div>');

var res = $.ajax({
url: 'chart.php',
dataType:"json",
async: false,
success: function(res)
{

  var options = {'title':'Feedback Sentiments Over Time', 'width':800, 'height':400,
 series: {
            0: { color: 'purple' },
            1: { color: 'navy' },
          
          }
};


var data = new google.visualization.arrayToDataTable(res);
var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_data'));
chart.draw(data, options);
$('#loader1').hide();

}
}).responseText;
}




google.charts.setOnLoadCallback(line_chart);
function line_chart() {


$('#loader2').fadeIn(400).html('<div style="background:#ddd;color:black;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp; &nbsp;Please Wait, Vaccine Statistics is being Loaded</div>');

var res1 = $.ajax({
url: 'chart.php',
dataType:"json",
async: false,
success: function(res1)
{

  var options = {'title':'Feedback Sentiments Over Time', 'width':800, 'height':400,
 series: {
            0: { color: '#800000' },
            1: { color: 'orange' },
          
          }
};


var data = new google.visualization.arrayToDataTable(res1);
var chart = new google.visualization.BarChart(document.getElementById('areachart_data'));
chart.draw(data, options);
$('#loader2').hide();

}
}).responseText;
}





google.charts.setOnLoadCallback(pie_chart);
function pie_chart() {


$('#loader3').fadeIn(400).html('<div style="background:#ddd;color:black;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp; &nbsp;Please Wait, Vaccine Statistics is being Loaded</div>');

var res2 = $.ajax({
url: 'chart1.php',
dataType:"json",
async: false,
success: function(res2)
{

  var options = {'title':'Sentiments by Topic Over Time', 'width':800, 'height':400,
 series: {
            0: { color: '#800000' },
            1: { color: 'orange' },
          
          }
};


var data = new google.visualization.arrayToDataTable(res2);
var chart = new google.visualization.ColumnChart(document.getElementById('piechart_data'));
chart.draw(data, options);
$('#loader3').hide();

}
}).responseText;
}






</script>

<br><br>
<h3><center>Feedback Sentimental Statistics Over Time</center></h3>
<div id="loader1"></div>
    <div id="areachart_data"></div>

<div id="loader2"></div>
    <div id="columnchart_data"></div>



<div id="loader3"></div>
    <div id="piechart_data"></div>



    </div>



<div id="loader" class='res_center_css'></div>

  </body>
</html>






