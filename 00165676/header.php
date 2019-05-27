<?php include_once('initial.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<title>INDEPENDENT STAR'S GROUP</title>


</head>
<body>
<!-- header section starts from here -->
<div class="header-section"> 


<!-- Navbar starts from here -->

	
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark  ">
			<div class="logo" style="margin-right: 400px;">
		  <a class="navbar-brand" href="index.php">INDEPENDENT STAR'S GROUP</a>
		  </div>
		  
		  <div class="navitems">
		    <ul class="navbar-nav ">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      
		       <li class="nav-item">
		        <a class="nav-link" href="contact.php">Contact Us</a>
		      </li>
		       
		      
		       <?php if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == false){ ?>
              
		      
		      
		      <li class="nav-item">
		        <a class="nav-link" href="donation.php">Donation</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="registration.php">Registration</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="login.php">Log In</a>
		      </li>
		      

		      
		        <?php }else{?>
		        <li class="nav-item">
		        <a class="nav-link" href="profileUpdate.php"><?php echo$_SESSION['user_name']; ?></a>
		      </li>	
		      <li class="nav-item">
		        <a class="nav-link" href="profile.php">Profile</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="post.php">Post Area</a>
		      </li>
		      
		      <li class="nav-item">
		        <a class="nav-link" href="donation.php">Donation</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="logout.php">Log Out</a>
		      </li>
		      
		      
		      <?php }?>
		    </ul>
		    </div>
		  
		  
		</nav>
	

	<!--Navbar Closed -->

</div>



<!-- Header section closed  -->