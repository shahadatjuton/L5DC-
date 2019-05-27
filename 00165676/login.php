<div class="bg">
<?php include_once 'header.php'; ?>


<?php include_once('initial.php');?>

<!-- css file added here -->
<style type="text/css" href="css/mystyle.css"></style>
<!-- CSS closed -->


<div class="loginform">

<div class="container p-3">

<div class="row">


<div class="col-sm-8 bg-light ">


  
  <!-- Main Content Area -->
     

  <!-- Main Content Area -->
      
      <h4>Login Here</h4>
      
  <form class="needs-validation" novalidate action="loginCheker.php" method="post">
   
    <div class="form-group">
      <label for="exampleInputEmail1">Email Address</label>
      <input type="email" class="form-control user-email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@example.com" required>
      <div class="invalid-feedback">
          Enter registered Email
      </div>
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
      <div class="invalid-feedback">
          Enter Your Password.
      </div>
    </div>

    <div class="loginbtn">
    <input type="submit" class="btn btn-primary submit-btn col-sm-4" value="LogIn">
    </div>
  <!--  <button type="submit" class="btn btn-primary">Submit</button>-->
  </form>
  
  </div>


</div>
</div>
</div>
</div>



<?php include_once 'footer.php'; ?>          

