<?php include_once('initial.php'); ?>
<?php 
	session_destroy(); 
	$_SESSION['isLoggedIn'] = false;
	header("location:index.php");

?>