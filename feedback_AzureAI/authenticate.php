

<?php
	
//set session
if(!isset($_SESSION['uid3']) || (trim($_SESSION['uid3']) == '')) {
//$username=strip_tags($_GET['username']);
		header("location: index.php");
		exit();
	}


?>