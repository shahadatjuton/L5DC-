

<!-- Slider starts from here -->


	<div class="slider">
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/p1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/p2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/p3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="marquee">
	

<hr>
<marquee><h1>Welcome To Our Web Page</h1></marquee>
<hr>
</div>
</div>	

<!-- slider closed here -->


<!-- Main section starts from here  -->
<div class="container">
	<div class="post">

		<div class="row">
			<div class="col-sm-4">

			<div class="card" >
			  <img class="card-img-top" src="images/s1.jpg" alt="post image">
			  <div class="card-body">
			    <h5 class="card-title">Education</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary"> Read More</a>
			  </div>
			</div>
		</div>
			<div class="col-sm-4">

			<div class="card" >
			  <img class="card-img-top" src="images/s1.jpg" alt="post image">
			  <div class="card-body">
			    <h5 class="card-title">Education</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary"> Read More</a>
			  </div>
			</div>
		</div>
			<div class="col-sm-4">

			<div class="card" >
			  <img class="card-img-top" src="images/s1.jpg" alt="post image">
			  <div class="card-body">
			    <h5 class="card-title">Education</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary"> Read More</a>
			  </div>
			</div>
		</div>
		</div>

	</div>

	<div class="post">

		<div class="row">
			<div class="col-sm-4">

			<div class="card" >
			  <img class="card-img-top" src="images/s2.jpg" alt="post image">
			  <div class="card-body">
			    <h5 class="card-title">Food Distribution</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary"> Read More</a>
			  </div>
			</div>
		</div>
			<div class="col-sm-4">
			<div class="card" >
			  <img class="card-img-top" src="images/s2.jpg" alt="post image">
			  <div class="card-body">
			    <h5 class="card-title">Food Distribution</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary"> Read More</a>
			  </div>
			</div>
		</div>
			<div class="col-sm-4">
				<div class="card" >
			  <img class="card-img-top" src="images/s2.jpg" alt="post image">
			  <div class="card-body">
			    <h5 class="card-title">Food Distribution</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary"> Read More</a>
			  </div>
			</div>
		</div>
		</div>

	</div>

	<div class="post">

		<div class="row">
			<div class="col-sm-4">
				<div class="card" >
			  <img src="images/s3.jpg" alt="post image">

			  <div class="card-body">
			    <h5 class="card-title">Salvation</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary"> Read More</a>
			  </div>
			</div>
		</div>
			<div class="col-sm-4">
			<div class="card" >
			  <img src="images/s3.jpg" alt="post image">

			  <div class="card-body">
			    <h5 class="card-title">Salvation</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary"> Read More</a>
			  </div>
			</div>
		</div>
			<div class="col-sm-4">
			 <img src="images/s3.jpg" alt="post image">

			  <div class="card-body">
			    <h5 class="card-title">Salvation</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary"> Read More</a>
			  </div>
		</div>
		</div>

	</div>

</div>

<!-- Visitors counter -->


<div class="container">

<?php 

include_once('db.php');
$conn=connect();

$sql= "SELECT counter from visitors where id=1";
$result=$conn->query($sql);

foreach ($result as $counter) {
	$count=$counter['counter'];
}

$counter =$count +1;

$sql= "UPDATE visitors set counter = $counter ";

$result=$conn->query($sql);

 ?>
 <div class="visitorshow"> 
<marquee><h2>**THANK YOU FOR VISITING OUR WEBSITE**</h2></marquee>	
<div class="counter fa">

	<?php 

	echo "Total Visited : " . $counter;

	 ?>
	
</div>
</div>





</div>




<!-- Main section closed -->

