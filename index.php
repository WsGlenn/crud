<?php include "conn.php"; ?>

<?php 
$qry = "select * from client";
$result = mysqli_query($conn,$qry);

	if(!$result){
		die('DATA BASE Connection failed');
	}else{
		print_r($result);
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD OPERATION</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">

	<?php 
	if(isset($_GET['message'])){
		echo "<h6>".$_GET['message']."</h6>";
	}
	
	?>

		<table  class="table table-hover table-bordered  table-stripped">
				<thead>
					<button class="btn btn-primary" style="float: right;"  data-bs-toggle="modal" data-bs-target="#exampleModal">ADD</button>
					<tr>
						<th>First name</th>
						<th>Middle Name</th>
						<th>Last name</th>
						<th>UPDATE</th>
						<th>DELETE</th>
					</tr>
				</thead>
				<?php  foreach ($result as $res):?>
				<tbody>
					<td><?=$res['FNAME'];?></td>
					<td><?=$res['MI'];?></td>
					<td><?=$res['LNAME'];?></td>
					<td>
						<a href="update.php" class="btn btn-warning">EDIT</a>
					<td>
						<a href="#" class="btn btn-danger">DELETE</a>
					</td>
						
					</td>
				</tbody>

				<?php endforeach; ?>

	
		</table>



<form  action ="insert.php" method ='POST'>
		<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD CLIENT</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
			
				<div class="form-group">
					<label for="fname">First Name </label>
					<input type="text" name="f_name" class="form-control">
				</div>

				<div class="form-group">
					<label for="fname">Middle Name </label>
					<input type="text" name="mi" class="form-control">
				</div>

				<div class="form-group">
					<label for="fname">Last Name </label>
					<input type="text" name="l_name" class="form-control">
				</div>

				<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input  type="submit"  name ="add_student" class="btn btn-primary" value ="ADD" />
      </div>

			</form>

      </div>
      
    </div>
  </div>
</div>

		
	</div>
		



</body>
</html>


