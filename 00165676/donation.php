<?php include_once 'header.php'; ?>
<?php

 
include_once('initial.php');
include_once('db.php');
$conn = connect();



if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == false){?>
	
	
    
     
        
            <script>alert("You Have to Login First")</script>
            
        
    
	
	
<?php 
header("refresh:0 , url=login.php");
} else {


if($_POST)
{
	
	$amount= $_POST['amount'];
	$trxid= $_POST['trxID'];
	$user_id= $_SESSION['user_id'];


$conn = connect();

	 $sql = "INSERT INTO donations (amount,trx_ID,user_id) VALUES ('$amount','$trxid','$user_id')";
     $conn->query($sql);

}


//sum of donations
	$sql= "SELECT SUM(amount)  FROM donations where amount_type=1";
    $sum = $conn->query($sql);



	    foreach ($sum as $row)
	{

		$total =$row['SUM(amount)'];
	}

?>

    <style type="text/css" href="css/mystyle.css"></style>
    <div class="container">
    <div class="total">

    <marquee><p>Donated Amount</p></marquee>
    <p> Total Amount: TK <?= $total?></p>
    </div>
    </div>


	<?php
	

	

    
		$conn = connect();
		$sql = "SELECT * FROM `donations`,`users` WHERE donations.user_id=users.id";
		$result = $conn->query($sql);
     
}     
?>








<div class="container">
	<div class="post">

		<div class="row text-center">
			<div class="col-sm-6">

			<div class="card" >
			  <img class="card-img-top text-center" src="images/bksh.png" alt="post image">
			  <div class="card-body " >
			    <h5 class="card-title">Bkash No</h5>
			    <p class="card-text">01768101274</p>
			    
			  </div>
			</div>
		</div>
			<div class="col-sm-6">

			<div class="card" >
			  <img class="card-img-top text-center" src="images/rocket.jpg" alt="post image">
			  <div class="card-body">
			    <h5 class="card-title">Rocket No</h5>
			    <p class="card-text">017681012743</p>
			    
			  </div>
			</div>
		</div>
			
		</div>
	</div>
	<div class="post">
		<div class="row text-center">
			<div class="col-sm-6">

			<div class="card" >
			  <img class="card-img-top text-center" src="images/dbbl.jpg" alt="post image">
			  <div class="card-body">
			    <h5 class="card-title">Account No</h5>
			    <p class="card-text">C.A. - 3446197005</p>
			    
			  </div>
			</div>
		</div>
			<div class="col-sm-6">

			<div class="card" >
			  <img class="card-img-top text-center" src="images/pubali.jpg" alt="post image">
			  <div class="card-body">
			    <h5 class="card-title">Account No</h5>
			    <p class="card-text">C.A. - 1922780034</p>
			    
			  </div>
			</div>
		</div>
			
		</div>
	</div>

</div>





<br><br><br><br><br><br><br><br><br><br>
 <div class="container">  
 	<div class="row">
		<div class="col-md-8 text-center ">
			<div class="donateform form-group">


		<form action="" method="post">
			
		
			<input type="number"class="form-control" name="amount" min="0" placeholder="Donation Amount" size="35" required><br>
			<input type="text"class="form-control" name="trxID" min="0"placeholder="Transection ID" size="35" required><br>

			<input type="submit" name="donation" class="btn btn-primary submit-btn" value="Donate">


		</form>

			</div>

		</div>
	</div>
</div>	












   
          <div class="container">
          	<div class="donatorlist text-center">
          		<marquee><p>***Thank you for donating us***</p></marquee>
		      <h1 class="section-heading">Donators List</h1>
		    
          	</div>
          </div>
          
      

<?php 
		$conn = connect();
		$sql = "SELECT * FROM `donations`,`users`  WHERE donations.user_id=users.id and amount_type=1";
		$result = $conn->query($sql);




 ?>    


	<div class="container">
		
	
	<div class="table-responsive ">
         <table class="table table-striped">
		 <thead class="thead-dark">
	<tr>
		<th>Donator's Name:</th>
		<th>Donation Date:</th>
		<th>Transection ID:</th>
		<th>Ammount:</th>
	</tr>
	</thead>
	<?php foreach($result as $prd){ ?>
	<tr>
		<td><?=$prd['first_name'].' '.$prd['last_name']?></td>
		<td><?=$prd['d_date']?></td>
		<td><?=$prd['trx_ID']?></td>
		<td><?=$prd['amount']?></td>
	</tr>
<?php 
	}


?>
</table>
</div>
</div>











<?php include_once 'footer.php'; ?>