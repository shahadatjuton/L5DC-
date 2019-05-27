<?php

function connect($setup=false){
	$host='localhost';
	$user='root';
	$pass='';
	$database='charity';
	if($setup)
		$conn = new mysqli($host,$user,$pass);
	else
		$conn = new mysqli($host,$user,$pass,$database);

	if($conn->connect_error){
		die("connection failed:" .$conn->connect_error);
	}
	return $conn;
}
?>
