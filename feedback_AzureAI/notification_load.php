<?php 
ob_start();
error_reporting(0);


ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

 ?>
<script>
$(document).ready(function(){

$('.notify_delete_post_btn').click(function(){
// confirm start
 if(confirm("Are you sure you want to Delete This Posts Alerts: ")){
var id = $(this).data('id');
var rid = $(this).data('rid');

//var userid_sess_data = localStorage.getItem('useridsessdata');

$(".loader-notify-delete-post_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Posts Alerts is being deleted...</div>');
var datasend = {'id': id, 'rid': rid};
		$.ajax({
			
			type:'POST',
			url:'notify_delete_post.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


	if(msg == 1){
alert('Posts Alerts Successfully Deleted');
$(".loader-notify-delete-post_"+id).hide();
$(".result-notify-delete-post_"+id).html("<div style='color:white;background:green;padding:10px;'>Posts Alerts Successfully Deleted</div>");
setTimeout(function(){ $(".result-notify-delete-post_"+id).html(''); }, 5000);
location.reload();
}


	if(msg == 0){

alert('Posts Alerts could not be deleted. Please ensure you are connected to Internet.');
$(".loader-notify-delete-post_"+id).hide();
$(".result-notify-delete-post_"+id).html("<div style='color:white;background:red;padding:10px;'>Posts Alerts could not be deleted. Please ensure you are connected to Internet.</div>");
setTimeout(function(){ $(".result-notify-delete-post_"+id).html(''); }, 5000);

}

}
			
});
}

// confirm ends

                });










            });






</script>





<style>



.post-css2{
background:#ec5574;
border:none;
color:white;
padding:6px;
border-radius:20%;
}

.post-css2:hover{
background:orange;
color:black;
}




.post-css1{
background:red;
border:none;
color:white;
padding:6px;
}

.post-css1:hover{
background:orange;
color:black;
}


.post-css{
background:navy;
border:none;
color:white;
padding:6px;
text-align:center;
}

.post-css:hover{
background:orange;
color:black;
}

.notify_content_css{
display:inline-block;border-style: dashed; border-width:2px; border-color: 
orange;color:black;background:#eeeeee;padding:10px;
}


.notify_content_css:hover{
color:black;background:#ec5574;
}
</style>




<?php

$sender_id=strip_tags($_POST['sender_id']);
echo $userid_sess_data = $sender_id;

include('data6rst.php');

$result = $db->prepare('SELECT * FROM notification where reciever_id = :reciever_id order by id desc');
$result->execute(array(':reciever_id' => $userid_sess_data
    ));
$nosofrows = $result->rowCount();
//echo $nosofrows;

$rec_List1 = $nosofrows;


if($rec_List1  == 0){
echo "<div style='background:red;color:white;padding:10px;border:none'>No New Feedback Comments Alerts yet.</div>";
}


while($v1 = $result->fetch()){
//foreach($row['data'] as $v1){

$id = $v1['id'];
$post_id = $v1['post_id'];
$sender_userid = $v1['userid'];
$sender_fullname1 = $v1['fullname'];
$sender_photo = $v1['photo'];
$department =  $v1['user_rank'];
$rid = $v1['reciever_id'];
$status = $v1['status'];
$type  = $v1['type'];
$timing = $v1['timing'];
$title = $v1['title'];
//$microtitle = substr($title, 0, 80)."...";

$microtitle = $title;
$title1 = $v1['title_seo'];

$pid = $title1;
// replace empty space with hyphen
$sender_fullname = str_replace(' ', '-', $sender_fullname1);

$patient_id = $v1['patient_id'];
$doctor_id = $v1['doctor_id'];
$doctor_email = $v1['doctor_email'];
$description = $title;


?>





<div class="col-sm-12 notify_content_css" >



<?php 
if($type == 'report_post'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-edit"></span><b style='color:navy'>A Feedback <?php echo $status;?></b>

<br><b><?php echo $sender_fullname1; ?>(<?php echo $department;?>)</b> Just Shared a Feedback<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 

<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>

<br>

<p>
 
<a href='report_comments1.php?pid=<?php echo $post_id; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='View Feedback Reports'>View Feedback Reports</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>











<?php 
if($type == 'comment_report'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-comments-o"></span><b style='color:navy'>Comment <?php echo $status;?></b>

<br><b><?php echo $sender_fullname1; ?>(<?php echo $department; ?>)</b> Commented on Feedback<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 

<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>

<br>

<p>
<a href='report_comments1.php?pid=<?php echo $post_id; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='View Feedback Comments'>View Feedback Comments</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>









<?php 
if($type == 'status_updates_report'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-edit"></span><b style='color:navy'>Reports <?php echo $status;?></b>

<br><b><?php echo $sender_fullname1; ?>(Dr.<?php //echo $department;?>)</b> Changed your Feedback Reports Status<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 

<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>

<br>

<p>
 
<a href='report_comments1.php?pid=<?php echo $post_id; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='Feedback Status Updates'>View Reports <br>Status Updates</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>








<?php 
if($type == 'priority_updates_report'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-edit"></span><b style='color:navy'>Reports <?php echo $status;?></b>

<br><b><?php echo $sender_fullname1; ?>(Dr.<?php //echo $department;?>)</b> Changed your Feedback Reports Priority<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 

<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>

<br>

<p>
 
<a href='report_comments1.php?pid=<?php echo $post_id; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='View Feedback Priority Updates'>View Feedback <br>Priority Updates</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>









</div>



<?php
}
?>

<?php
ob_flush();
?>


