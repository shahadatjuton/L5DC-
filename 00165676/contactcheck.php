<?php
include_once('db.php');
$conn = connect();


$name=$_POST['name'];


$address=$_POST['address'];
$email=$_POST['email'];

$phone=$_POST['phone'];
$query=$_POST['query'];



$sql = "INSERT INTO `contact` (`name`, `address`, `email`, `phone`,`query`)
VALUES ('$name','$address','$email','$phone','$query')";

//echo $sql;

if($conn->query($sql))
{
    echo "<script>alert ('Query has been sent successfully')</script>";
header("refresh:2, url=index.php");
}else
{
	echo "<script>alert ('Please try again')</script>";
    //echo 'Not inserted';
}
   header("refresh:5, url=index.php");



?>
