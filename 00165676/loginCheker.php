<?php

include_once('db.php');

include_once('initial.php');

	

$flag = true;

if(isset($_POST['email']) && $_POST['email']!='')
{
	$email = $_POST['email'];
}
else
{
	echo "<script>alert ('You must type your Email')</script>";
	
	$flag = false;
    header("refresh:0, url=login.php");
}

if(isset($_POST['password']) && $_POST['password']!=''){
	$password = $_POST['password'];
}
else
{
	echo "<script>alert ('You must type your Password')</script>";

	$flag = false;
    header("refresh:0, url=login.php");
}



if($flag){
	$sql = "SELECT * FROM `users` 
			WHERE `email`='$email'";


$conn = connect();


	$result = $conn->query($sql);
	if($result->num_rows >0)

//if email exixts		

	{
		$sql = "SELECT * FROM `users` 
			WHERE `email`='$email' 
			AND `password`='$password'";
			
		$result = $conn->query($sql);
		if($result->num_rows >0)

// if Email and Password match


		{
			foreach($result AS $row){
				$_SESSION['user_name'] =$row['first_name'].' '.$row['last_name'];
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['role'] = $row['user_role'];
				$_SESSION['user_email'] = $row['email'];
			}
			$_SESSION['isLoggedIn'] = true;
			header("location:index.php");
		}else{//if password not match
			$_SESSION['isLoggedIn'] = false;
			
		   echo "<script>alert ('Your password is wrong')</script>";
	
	$flag = false;
    header("refresh:0, url=login.php");
			
		}
	}else{//if email not exist
		$_SESSION['isLoggedIn'] = false;
		
	{
			
			header("location:registration.php");
			exit;
		}
		header("location:index.php?msg=Your email is wrong! Please register first");
	}
	
	
}


?>