<div class="profilepage">
<?php include_once 'header.php'; 
 
include_once('db.php');

$conn = connect();
	
	$sql="SELECT * FROM users";
	$result=$conn->query($sql);

	foreach ($result as $profile) {
		
	}



//sum of donations


$userID = $_SESSION['user_id'];

    $sql= "SELECT SUM(amount)  FROM donations where user_id=$userID";
    $sum = $conn->query($sql);



        foreach ($sum as $row)
    {

        $total =$row['SUM(amount)'];
    }



 ?> 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="images/me.jpg" alt="" height="200" width="250"/>
                    <div class="file btn btn-lg btn-primary">
                                Change Photo
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
        <div class="col-md-6">
     <div class="profile-head">
        <h5><?=$_SESSION['user_name']?></h5>
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1){ ?>
        
            <h5>Admin</h5>  <?php
        }else{  ?>
        <h5>General User</h5><br> <?php }?>
          

  
       
                                    
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                    </li>
                </ul>
            </div>
        </div>
    <div class="col-md-2">
        <a href="profileUpdate.php">Edit Profile</a>
    </div>
</div>
    <div class="row">
        <div class="col-md-4">
<?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1){ ?>
        
             
            <div class="profile-work">
                <br><hr><p>Check Out</p><hr>
                <a href="donation.php">Donation page</a><br/>
                <a href="post.php">Post Page</a><br/>

                            
                <a href="donationcheck.php">Donation Check</a><br>
                <a href="userlist.php">User List</a><br>
                <a href="query.php">Query Check</a><br>
                
                <p>Role</p>
                <a href="">Admin</a><br/>
                 
                </div><?php
 }else{  ?>
                <div class="profile-work">
                <br><hr><p>Check Out</p><hr>
                <a href="donation.php">Donation page</a><br/>
                <a href="post.php">Post Page</a><br/>

                            
                
                
                <p>Role</p>
                <a href="">General User</a><br/>
                 
                </div> <?php }?>                
            </div>
        <div class="col-md-8">
<div class="tab-content profile-tab" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <br><br><br>
                <div class="row">
                <div class="col-md-6">
                    <label>User Id</label>
                </div>
                <div class="col-md-6">
                    <p><?=$profile['id']?></p>
                </div>
                </div>
    <div class="row">
            <div class="col-md-6">
                <label>Name</label>
            </div>
            <div class="col-md-6">
                <p><?=$_SESSION['user_name']?></p>
            </div>
    </div>
        <div class="row">
            <div class="col-md-6">
                <label>Email</label>
            </div>
         <div class="col-md-6">
                <p><?=$profile['email']?></p>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Date of Birth</label>
            </div>
        <div class="col-md-6">
            <p><?=$profile['date_of_birth']?></p>
        </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                 <label>Address</label>
            </div>
            <div class="col-md-6">
                 <p><?=$profile['address']?></p>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <br><br><br>
        <div class="row">
            <div class="col-md-6">
                <label>Total Donated Amount</label>
            </div>
            <div class="col-md-6">
                <p><?=$row['SUM(amount)']?></p>
            </div>
        </div>
        
        
        
        
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>



 <?php include_once 'footer.php'; ?>
 </div>
 