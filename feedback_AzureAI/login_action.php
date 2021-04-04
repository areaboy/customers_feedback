<?php
error_reporting(0);
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST');
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 

$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);


if ($email == ''){
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>Email is empty</font></div>";
exit();
}


if ($password == ''){
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>password is empty</font></div>";
exit();
}


// honey pot spambots
$emailaddress_pot =$_POST['emailaddress_pot'];
if($emailaddress_pot !=''){
//spamboot detected.
//Redirect the user to google site

echo "<script>
window.setTimeout(function() {
    window.location.href = 'https://google.com';
}, 1000);
</script><br><br>";

exit();
}





include('data6rst.php');
$result = $db->prepare('SELECT * FROM users where email = :email');

		$result->execute(array(
			':email' => $email

    ));

$count = $result->rowCount();

$row = $result->fetch();

if( $count == 1 ) {





//start hashed passwordless Security verify
if(password_verify($password,$row["password"])){
            //echo "Password verified and ok";


// initialize session if things where ok.
session_start();
$_SESSION['uid3'] = $row['id'];
$_SESSION['fullname3'] = $row['fullname'];
$_SESSION['username3'] = $row['id'];
$_SESSION['email3'] = $row['email'];
$_SESSION['photo3'] = $row['photo'];
$_SESSION['user_rank3'] = $row['user_rank'];
$_SESSION['user_banned3'] = $row['user_banned'];
$_SESSION['token3'] = $row['data'];
$_SESSION['usern3'] = $row['status'];
$_SESSION['points3'] = $row['points'];
$_SESSION['levels3'] = $row['levels'];
$_SESSION['created_time3'] = $row['created_time'];
$_SESSION['country3'] = $row['country'];
$_SESSION['admin_id3'] = $row['admin_id'];

echo "<div class='alert alert-success'>Login sucessful <img src='ajax-loader.gif'></div>";
echo "<script>window.location='dashboard.php'</script>";



}
else{
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>Password Does not Matched</font></div>";

}



}
else {
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>User with This Email does not exist..</font></div>";
}






?>

<?php ob_end_flush(); ?>
