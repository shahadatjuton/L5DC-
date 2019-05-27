<?php include_once 'header.php'; ?>




  <div class ="container"> 
	<div class="col-lg-9">
		<!-- Main Content Area -->
			<div class="registrationform">
			<br><br><h2 class="text-center">REGISTRATION FORM</h2><br><br>
        <form action="registration_check.php" method="post">
  <div class="form-group">
   <label for="nm">First Name</label>
    <input type="text" class="form-control" name="fname" id="fnm"  placeholder="Enter your first-name" required>
    
    <label for="lm">Last Name</label>
    <input type="text" class="form-control" name="lname" id="lnm"  placeholder="Enter your last-name" required>
    <label for="lm">Date of birth</label>
    <input type="date" class="form-control" name="bday" id="dob"  placeholder="Enter your Date of birth" required>
    <label for="lm">Address</label>
    <input type="text" class="form-control" name="address" id="adrs"  placeholder="Enter your Address" required>
    
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="eml" aria-describedby="emailHelp" placeholder="email@example.com" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="psw" id="psw1" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Repeat - Password</label>
    <input type="password" class="form-control" name="psw-repeat" id="psw2" placeholder="Repeat Password" required required>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" class="btn btn-primary" value="Submit">
<!--  <button type="submit" class="btn btn-primary">Submit</button>-->
</form>
</div>
		</div>
    </div>




<?php include_once 'footer.php'; ?>
