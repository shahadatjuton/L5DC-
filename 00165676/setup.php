<?php

//Connect to database 

include_once('db.php');
$conn = connect();



// Create database
$sql = "CREATE DATABASE IF NOT EXISTS charity";
if ($conn->query($sql)) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: " . $conn->connect_error;
}





// sql to create USERS table

$sql = "CREATE TABLE IF NOT EXISTS users (
`id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `first_name` varchar(60) NOT NULL,
    `last_name` varchar(60) NOT NULL,
    `date_of_birth` varchar(10) NOT NULL,
    `address` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(30) NOT NULL,
    `password_repeat` varchar(30) NOT NULL,
    `user_role` int(1) NOT NULL DEFAULT '0' COMMENT '0-customer, 1-admin'
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";


if ($conn->query($sql) === TRUE) {
    echo "Table users is created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}





$sql = "INSERT INTO `visitors` (`id`, `counter`) VALUES
(1,0)";
if($conn->query($sql)){
    echo 'Inserted data into visitors table Successfully<br>';
    
}else {
  echo "Error creating table: " . $conn->error;
    
}

//Insert into visitors table

// $sql = "INSERT INTO `users` (`id`, `first_name`,`last_name`,`date_of_birth`,`address`, `email`, `password`,`password_repeat`, 
//  `user_role`) VALUES
// (1,admin,admin,12-12-12,Dhaka,admin@gmail.com,123,123,1)";
// if($conn->query($sql)){
//     echo 'Inserted data into users table Successfully<br>';
    
// }else {
//   echo "Error creating table: " . $conn->error;
    
// }







// sql to create DONATIONS table



$sql = "CREATE TABLE IF NOT EXISTS `donations` (
    `d_id` int(5) AUTO_INCREMENT PRIMARY KEY,
    `user_id` int(5) NOT NULL,
    
    `d_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `trx_ID` varchar(100) NOT NULL,
    `amount` int(100) NOT NULL,
    `amount_type` int(1) NOT NULL DEFAULT '0' COMMENT '0-pending, 1-approved')
    ENGINE=InnoDB DEFAULT CHARSET=utf8;";
if($conn->query($sql)){
    echo 'Donations table created Successfully<br>';
}else {
  echo "Error creating table: " . $conn->error;
}


// sql to create POSTS table


$sql = "CREATE TABLE IF NOT EXISTS `posts` (
    `post_id` int(15) AUTO_INCREMENT PRIMARY KEY,
    `title` varchar(100) NOT NULL,
    `post` text NOT NULL,
    `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `user_id` int(15) NOT NULL)
 
  ENGINE=InnoDB DEFAULT CHARSET=utf8;";

if($conn->query($sql)){
    echo 'posts table created Successfully<br>';
}else {
  echo "Error creating table: " . $conn->error;
}




// sql to create COMMENTS table





$sql = "CREATE TABLE IF NOT EXISTS `comments` (
    `comment_id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `comment` text NOT NULL,
    `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `post_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL)
 ENGINE=InnoDB DEFAULT CHARSET=utf8;";

if($conn->query($sql)){
   echo 'Comment table created Successfully<br>';
}else {
 echo "Error creating table: " . $conn->error;
}





//Create visitors Table

$sql = "CREATE TABLE IF NOT EXISTS `visitors` (
    `id` int(5) AUTO_INCREMENT PRIMARY KEY,
    `counter` int(100) NOT NULL)
    ENGINE=InnoDB DEFAULT CHARSET=utf8;";

if($conn->query($sql)){
    echo 'visitors table created Successfully<br>';
}else {
  echo "Error creating table: " . $conn->error;
    
}




//Insert into visitors table

$sql = "INSERT INTO `visitors` (`id`, `counter`) VALUES
(1,0)";
if($conn->query($sql)){
    echo 'Inserted data into visitors table Successfully<br>';
    
}else {
  echo "Error creating table: " . $conn->error;
    
}



// sql to create VOLUNTEER table

$sql = "CREATE TABLE IF NOT EXISTS volunteer (
   `id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `first_name` varchar(60) NOT NULL,
    `last_name` varchar(60) NOT NULL,
    `gender` varchar(100) NOT NULL,
    `date_of_birth` varchar(10) NOT NULL,
    `address` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `phone` varchar(100) NOT NULL
    
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";


if ($conn->query($sql) === TRUE) {
    echo "Table users is created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}




// sql to create Contact table

$sql = "CREATE TABLE IF NOT EXISTS contact (
   `id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(60) NOT NULL,
    `address` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `phone` varchar(100) NOT NULL,
    `query` varchar(500) NOT NULL
    
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";


if ($conn->query($sql) === TRUE) {
    echo " contact Table  is created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}










$conn->close();
?> 



<a href="index.php">Home Page</a> 