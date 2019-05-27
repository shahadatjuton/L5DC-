<?php 
include_once('db.php');

$conn = connect();

$uname= $_REQUEST['uname'];
$msg= $_REQUEST['msg'];



$sql =	"INSERT INTO logs(username,msg) VALUES ('$uname','$msg')";
$conn->query($sql);


$sql="SELECT * FROM `logs` ORDER BY `logs`.`id` DESC";
$result = $conn->query($sql);

foreach ($result as $chat) {
	$chat['username'];
	$chat['msg'];
}


// while ( $result) {
// 	echo $result['username'] ." ". $result['msg']. ;
// }


 ?>