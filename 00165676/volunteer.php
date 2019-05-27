<div class="rg-bg">
<?php include_once 'header.php'; 
// Volunteer information collect from form

include_once('initial.php');
include_once('db.php');
$conn = connect();



if($_POST){
$flag = true;

if(isset($_POST['fname']) && $_POST['fname']!='')
{
	$fname = $_POST['fname'];
}
else
{
	echo "<script>alert ('You must type your First Name')</script>";
	
	$flag = false;
    header("refresh:0, url=volunteer.php");
}




$fname=$_POST['fname'];
$lname=$_POST['lname'];
$bday=$_POST['bday'];
$address=$_POST['address'];
$email=$_POST['email'];




$sql = "INSERT INTO `volunteers` (`first_name`, `last_name`, `date_of_birth`, `address`,`email`)
VALUES ('$fname','$lname','$bday','$address','$email')";


//echo $sql;

if($conn->query($sql)){
    echo 'Registration completed successfully';

}else
{
	echo $conn->error;
    //echo 'Not inserted';
}
   header("refresh:5, url=volunteer.php");

}

?>


<!-- Registration Form -->

  <div class="registrationform  ">
    <div class ="container"> 
      <div class="row">
	       <div class="col-sm-10 bg-light">
		
			
			   <h2>REGISTRATION FORM</h2>
        <form action="" method="post">
          <div class="form-group">
           <label for="nm">First Name</label>
            <input type="text" class="form-control" name="fname" id="fnm"  placeholder="Enter your first-name">
            
            <label for="lm">Last Name</label>
            <input type="text" class="form-control" name="lname" id="lnm"  placeholder="Enter your last-name">
            <!-- <label for="gender">Gender</label>
            <input type="radio" name="gender"> -->
            <label for="dob">Date of birth</label>
            <input type="date" class="form-control" name="bday" id="dob"  placeholder="Enter your Date of birth">
            <label for="adress">Address</label>
            <input type="text" class="form-control" name="address" id="adrs"  placeholder="Enter your Address">
            
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="eml" aria-describedby="emailHelp" placeholder="email@example.com">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
             </div>
            
            
            <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        
        </form>
		  </div>
    </div>
  </div>
</div>




<?php include_once 'footer.php'; ?>
</div>