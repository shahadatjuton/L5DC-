<?php include_once 'header.php'; 

include_once('db.php');
$conn = connect();


	$id = $_SESSION['user_id'];
		//Update info of logged in user
		if($_POST){
			$fName = $_POST['first_name'];
			$lName = $_POST['last_name'];
			$address = $_POST['address'];
			$dob = $_POST['date_of_birth'];
			$email = $_POST['email'];
			$pass = $_POST['password'];
			
			$sql = "UPDATE users SET first_name='$fName',last_name='$lName',address='$address',date_of_birth='$dob',email='$email',password='$pass' WHERE id=$id";
			$conn->query($sql);
			
			header("refresh:2,url=profile.php");
		}





		//Get all info of logged in user
		$sql = "SELECT * FROM users WHERE id=$id";

		$result = $conn->query($sql);

		
		foreach($result as $row){
			$id 			= $row['id'];
			$first_name 	= $row['first_name'];
			$last_name 		= $row['last_name'];
			$date_of_birth  = $row['date_of_birth'];
            $address 	    = $row['address'];
			$email_address 	= $row['email'];
			$password 		= $row['password'];
		}
			$_SESSION['user_name'] = $row['first_name'].' '.$row['last_name'];
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_role'] = $row['user_role'];



?>


<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="" method="POST" enctype="multipart/form-data" >

			      <div >
			       <h2>Update your Profile Below </h2>
			      </div>

			      <div class="form-group">
			        <label>First Name</label>
			        <input type="text" name="first_name" class="form-control" value="<?=$first_name?>">
			      </div>

				  <div class="form-group">
			        <label>Last Name</label>
			        <input type="text" name="last_name" class="form-control" value="<?=$last_name?>">
			      </div>

			      <div class="form-group">
			        <label>Date Of Birth</label>
			        <input type="Date" name="date_of_birth" class="form-control" value="<?=$date_of_birth?>">
			      </div>

			        <div class="form-group">
			        <label>Address</label>
			        <input type="text" name="address" class="form-control" value="<?=$address?>">
			      </div>

			      <div class="form-group">
			        <label>Email</label>
			        <input type="text" name="email" class="form-control" value="<?=$email_address?>" readonly>
			      </div>

			      <div class="form-group">
			        <label>Password</label>
			        <input type="password" name="password" class="form-control" value="<?=$password?>">
			      </div>
			      
			      <div class="form-group">
			         <input type="submit" name="btn" class="btn btn-primary btn-block" value="Update">
			    
			      </div>
				  

			</form>
			
		</div>
		
	</div>
	
</div>




<?php include_once 'footer.php'; ?>