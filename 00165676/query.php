<?php include_once 'header.php'; 

include_once('db.php');
$conn = connect();





		//Get all info of logged in user
		$sql = "SELECT * FROM contact  ORDER BY `contact`.`id` ASC";

		$result = $conn->query($sql);

		
	
		
?>
<div class="container">
	<div class="table-responsive ">
         <table class="table table-striped">
		 	<thead class="thead-dark">
				<tr>
					
					<th>Name</th>
					<th>E-mail</th>
					<th>Phone No</th>
					<th>Query</th>
					
				</tr>
			</thead>
	<?php foreach($result as $prd){ ?>
				<tr>
					
					
					<td><?=$prd['name']?></td>
					<td><?=$prd['email']?></td>
					<td><?=$prd['phone']?></td>
					<td><?=$prd['query']?></td>
					
					
				</tr>
<?php 
	}
?>
		</table>
	</div>
</div>




<?php include_once 'footer.php'; ?>