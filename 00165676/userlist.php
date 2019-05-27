<?php include_once 'header.php'; 

 
include_once('db.php');

$conn = connect();









?>
<div class="container">
	<div class="row">
		

<div class="col-lg-12 text-center">
		<!-- Main Content Area -->

<?php
if($_SESSION['role'] =1){
	
	$sql = 'SELECT * FROM `users`';
	$result = $conn->query($sql);
?>
<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Name</th>
	</tr>	
	<?php foreach($result as $prd){ ?>
	<tr>
		<td><?=$prd['id']?></td>
		<td><?=$prd['first_name'].' '.$prd['last_name'];?></td>
		<td><form action="" method="POST">
			<input type="hidden" name="user_id" value="<?=$prd['id']?>">
			<input type="submit" name="delete" value="Delete User" class="btn-danger">
			</form>
		</td>
	</tr>
<?php 
		}
	} 
?>
</table>

</div>
	</div>
</div>








<?php 


// Delete User

if (isset($_POST['delete'])) {
	$ID=$_POST['user_id'];



$sql = "DELETE FROM  users WHERE id='$ID'";
if ($conn->query($sql)) {
echo "<script>alert ('User Deleted from the system')</script>";
header("refresh:0, url=userlist.php");
}


}




include_once 'footer.php'; ?>