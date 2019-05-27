<?php include_once 'header.php'; 

 
include_once('db.php');

$conn = connect();




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

$sql= "SELECT * FROM users,posts  WHERE posts.user_id=users.id";
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
          <p class="text-right"><?=$_SESSION['user_name']?></p>
          <p><?=$post['post']?></p>
          
       </div>
    </div>
    
 <div class="well">


<form action="" method="POST">
            <input type="hidden" name="post_id" value="<?=$post['post_id']?>">
            
            <textarea  name="comment"></textarea><br><br>
            <button  type="submit" name="comments" class="btn btn-primary col-sm-2">Submit</button>
            
          </form>
<div class="well">

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
        
          <p class="text-right"><?=$_SESSION['user_name']?></p>
          <p><?=$comment['comment']?></p>

          
       </div>
    </div>


    


      



      <?php } ?>


</div>

</div>

    <?php } ?>
  </div>









</div>
