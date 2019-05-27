<?php

	$host='localhost';
	$user='root';
	$pass='';
    $database='charity';
    
    
// Create connection


	$conn = new mysqli($host,$user,$pass,$database);
	
	
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?> 