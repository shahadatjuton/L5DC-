<?php
include_once('db.php');
$conn = connect();

$flag = true;

if(isset($_POST['fname']) && $_POST['fname']!='')
{
	$fname = $_POST['fname'];
}
else
{
	echo "<script>alert ('You must type your First Name')</script>";
	
	$flag = false;
    header("refresh:0, url=registration.php");
}


if(isset($_POST['lname']) && $_POST['lname']!=''){
	$lname = $_POST['lname'];
}
else
{
	echo "<script>alert ('You must type your Last Name')</script>";

	$flag = false;
    header("refresh:0, url=registration.php");
}



if(isset($_POST['bday']) && $_POST['bday']!=''){
	$bday = $_POST['bday'];
}
else
{
	echo "<script>alert ('You must type your Birth Date')</script>";

	$flag = false;
    header("refresh:0, url=login.php");
}


if(isset($_POST['address']) && $_POST['address']!=''){
	$address = $_POST['address'];
}
else
{
	echo "<script>alert ('You must type your Address')</script>";

	$flag = false;
    header("refresh:0, url=login.php");
}



if(isset($_POST['email']) && $_POST['email']!=''){
	$email = $_POST['email'];
}
else
{
	echo "<script>alert ('You must type your Password')</script>";

	$flag = false;
    header("refresh:0, url=login.php");
}


if(isset($_POST['psw']) && $_POST['psw']!=''){
	$password = $_POST['psw'];
}
else
{
	echo "<script>alert ('You must type your Password')</script>";

	$flag = false;
    header("refresh:0, url=login.php");
}

if(isset($_POST['psw-repeat']) && $_POST['psw-repeat']!=''){
	$password_repeat = $_POST['psw-repeat'];
}
else
{
	echo "<script>alert ('You must type your Password')</script>";

	$flag = false;
    header("refresh:0, url=login.php");
}


//Email Checking

if($flag){
	$sql = "SELECT * FROM `users` 
			WHERE `email`='$email'";


$conn = connect();


	$result = $conn->query($sql);
	if($result->num_rows >0){

	echo "<script>alert ('This Email is used already. Please enter a new valid email')</script>";
	
	$flag = false;
    header("refresh:0, url=registration.php");
	}
}
else{





$sql = "INSERT INTO `users` (`first_name`, `last_name`, `date_of_birth`, `address`,`email`, `password`, `password_repeat`)
VALUES ('$fname','$lname','$bday','$address','$email','$password','$password_repeat')";

//echo $sql;

if($conn->query($sql)){
    echo 'Registration completed successfully';

}else
{
	echo $conn->error;
    //echo 'Not inserted';
}
   header("refresh:5, url=index.php");

}

?>
