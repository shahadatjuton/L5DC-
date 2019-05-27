<?php include_once 'header.php'; 

include_once('initial.php');
include_once('db.php');
$conn = connect();

?>
<!--Post form  -->
<!-- css file added here -->
<style type="text/css" href="css/mystyle.css"></style>
<!-- CSS closed -->


<div class="container">
	<div class="Address">

		<h3>INDEPENDENT STAR'S GROUP</h3>
		<p>Email:independentstars4@gmail.com</p>
		<p>Phone:+8801768101274</p>
		<p>21/A,ring road,Dhaka-1207</p>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-6">
			
			 <form action="contactcheck.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2"  name="name" placeholder="Enter your name" required="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" name="address" placeholder="Enter your Address" required="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" name="email" placeholder="Enter your Email" required="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="number" class="form-control mt-2" name="phone" placeholder="Enter your Contact Number " required="">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="query" placeholder="Write your Message" rows="3" required=""></textarea>
              </div>
            </div>
            <div class="col-12">
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
                <label class="form-check-label" for="invalidCheck2">
                  Check me out
                </label>
              </div>
            </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </div>
        </form>
		</div>

<!-- google map -->


		<div class="col-xs-12 col-md-6">
			<div class="map">
				<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.364023228158!2d90.35838297836993!3d23.77237395500699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a3b0d05245%3A0xa95499dce2e672f9!2sQueen&#39;s+School+%26+College!5e0!3m2!1sen!2sbd!4v1538752859385" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
			</div>
		</div>
		
	</div>
	
</div>























<?php include_once 'footer.php'; ?>