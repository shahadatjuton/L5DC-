<?php include_once 'header.php'; 

 
include_once('initial.php');
include_once('db.php');
$conn = connect();




$sql = "SELECT * FROM `donations`,`users` WHERE donations.user_id=users.id and amount_type=0";

$result = $conn->query($sql);

// Accept  action


if (isset($_POST['accept'])) {
	$donationID=$_POST['donation_id'];



$sql = "UPDATE donations SET amount_type='1' WHERE d_id='$donationID'";

if ($conn->query($sql)) {
echo "<script>alert ('Donation Accepted')</script>";
header("refresh:0, url=donationcheck.php");
}



}

// Reject  action


if (isset($_POST['reject'])) {
	$donationID=$_POST['donation_id'];



$sql = "DELETE FROM  donations WHERE d_id='$donationID'";
if ($conn->query($sql)) {
echo "<script>alert ('Donation Rejected')</script>";
header("refresh:0, url=donationcheck.php");
}


}




?>




<div class="container">
	<div class="table-responsive ">
         <table class="table table-striped">
		 	<thead class="thead-dark">
				<tr>
					
					<th>Donator's Name</th>
					<th>Donation Date</th>
					<th>Transection ID</th>
					<th>Ammount</th>
					<th>Action</th>
				</tr>
			</thead>
	<?php foreach($result as $prd){ ?>
				<tr>
					
					<td><?=$prd['first_name'].' '.$prd['last_name']?></td>
					<td><?=$prd['d_date']?></td>
					<td><?=$prd['trx_ID']?></td>
					<td><?=$prd['amount']?></td>
					
					<td><form action="" method="POST">
						<input type="hidden" name="donation_id" value="<?=$prd['d_id']?>">
						<input type="submit" name="accept" value="Accept" class="btn-success">
						<input type="submit" name="reject" value="Reject" class="btn-danger">
					</form></td>
				</tr>
<?php 
	}
?>
		</table>
	</div>
</div>



<?php 

// update donation

// $sql = "UPDATE donations SET amount_type=1 WHERE id=$prd['id']";
// $u_result = $conn->query($sql);
// $sql="DELETE FROM `donations` WHERE id="
 ?>



<?php include_once 'footer.php'; ?>