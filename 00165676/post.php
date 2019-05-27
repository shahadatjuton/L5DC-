<?php include_once 'header.php'; 

 
include_once('db.php');

$conn = connect();


if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == false){?>
  
  
    
     
        
            <script>alert("You Have to Login First")</script>
            <hr class="my-4">
        
    
  
  
<?php 
header("refresh:5 , url=donation.php");
} else {

// ===================Post collect from form and insert into database====================================

if(isset($_POST['posts'])){
        
  $title  =$_POST['title'];
  $post   =$_POST['post'];
  $userID = $_SESSION['user_id'];
                
              
$sql= "INSERT INTO posts  (
title,post,user_id) VALUES ('$title','$post','$userID')";
$conn->query($sql);


}


// ===================COMMENT collect from form and insert into database====================================
      
if(isset($_POST['comments'])){
        
        
        
  $postID=$_POST['post_id'];
  $comment=$_POST['comment'];
  $userID=$_SESSION['user_id'];


$sql="INSERT INTO comments (post_id,comment,user_id) VALUES ('$postID','$comment','$userID')";
$conn->query($sql);

}




// ============Post Delete ==========
// ============Post Delete ==========

if (isset($_POST['delete_post'])) {
  $PostID=$_POST['postID'];



$sql = "DELETE FROM `posts` WHERE `post_id`='$PostID' ";
$conn->query($sql);

echo "<script>alert ('Post has been deleted successfully')</script>";
header("refresh:0, url=post.php");

}



// ============Comment Delete ==========
// ============Comment Delete ==========

if (isset($_POST['delete_comment'])) {
  $CommentID=$_POST['commentID'];



$sql = "DELETE FROM `comments` WHERE `comment_id`='$CommentID' ";
$conn->query($sql);

echo "<script>alert ('Comment has been deleted successfully')</script>";
header("refresh:0, url=post.php");

}







?>






<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<div class="container">

<div class="well">
  
        <form action="" method="POST">

          <h4>Type your title for post</h4>

          <div class="form-group">
          <input type="text" name="title" class="form-control" placeholder="Enter a Title of your post" required>
          </div>
          <div class="form-group">
          <h4>Type your post</h4>
          <textarea class="form-control" name="post"placeholder="Write your post" required></textarea>
                                    
          </div>
                                        
          <div class="form-group">

          <input type="submit" name="posts" value="Post" class="btn btn-primary btn-block float-center">
          </div>

        </form>

    </div>

<?php

$sql= "SELECT * FROM users,posts  WHERE posts.user_id=users.id  ORDER BY `posts`.`post_id` DESC";
$result= $conn->query($sql);
          


?>



  <div class="well">

<?php foreach($result AS $post){ ?>

      <div class="media">
        <a class="pull-left" href="#">
        <img class="media-object" src= >
      </a>
      <div class="media-body">
        <h4 class="media-heading"><?=$post['title']?></h4>
          
          <p><?=$post['post']?></p>
          <p><?=$post['post_date']?></p>
          <p><b><?=$_SESSION['user_name']?></b></p>

<?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1){ ?>
        
            <p ><form action="" method="POST">
            <input type="hidden" name="postID" value="<?=$post['post_id']?>">
            <input type="submit" name="delete_post" value="Delete" class="btn-success">
            
          </form></p> <?php
        }?>

          
          
       </div>
    </div>
    
 <div class="well text-center" >
  <div class="col " >

<form action="" method="POST">
            <input type="hidden" name="post_id" value="<?=$post['post_id']?>">
            
            <textarea  name="comment" required=""></textarea><br><br>
            <button  type="submit" name="comments" class="btn float-right btn-primary col-sm-2">Submit</button>
            
          </form>
        </div>
        <hr>
<div class="well">
  <h1>This is comment section</h1>

<?php 
    $postIdForComment = $post['post_id'];
    $sql = "SELECT * FROM `comments`  WHERE post_id=$postIdForComment";

$result= $conn->query($sql);

    $result = $conn->query($sql);
      foreach($result AS $comment){  ?>

         <div class="media">
        <a class="pull-left" href="#">
        <img class="media-object" src=>
      </a>
      <div class="media-body">
         
          
          <p><?=$comment['comment']?></p>
          <p><?=$comment['comment_date']?></p>
          <p><b><?=$_SESSION['user_name']?></b></p>


<?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1){ ?>

          <p><form action="" method="POST">
            <input type="hidden" name="commentID" value="<?=$comment['comment_id']?>">
            <input type="submit" name="delete_comment" value="Delete" class="btn-success">
            
          </form></p>

<?php
        }?>

          
       </div>
    </div>


    


      



      <?php } ?>


</div>

</div>

    <?php }
    } ?>
  </div>









</div>

<?php include_once 'footer.php'; ?>