<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>blog home page</title>
	
</head>
<body>

		<?php 
		session_start();
		include "../connection.php";
		include "../navbar.php"; 
		?>
	
<div class="container pt-1">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="card">
			  <div class="card-body">
			  	<form action="postCurd.php" method="post">
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Title</label>
				    <input type="text" class="form-control" name="user_title" id="exampleInputEmail1" aria-describedby="emailHelp">				    
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">Description</label>
				    <textarea input type="text" name="user_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
				  </div>
				  <button type="submit" name="submit_button" class="btn btn-primary">Submit</button>
				</form>
			  </div>
			</div>
		</div>
		<div class="col-sm-3"></div>

	</div>
</div>

<?php
 include('../connection.php');
     $user_id =$_SESSION['user_id'];

   $str = "SELECT A.title,A.description,A.userId, B.name FROM `post` as A INNER JOIN `users` as B ON A.userId = B.id";

   $query=mysqli_query($con,$str);

   
   if ($query){

   	echo "
<div class='card'>
  <div class='card-header'>
    <th>Title</th>
  </div>
  <div class='card-body'>
    <h5 class='card-title'>Special title treatment</h5>
    <p class='card-text'><th>Description</th></p>
  </div>
</div>";
     				
     				$sn =1;
     	while($row = mysqli_fetch_array($query)){
     		$post_id = $row['userId'];
     		$userTitle = $row['title'];
     		$userDescription = $row['description'];
     		$name = $row['name'];
     		echo "
				<div class='card pt-5'>
  <div class='card-header'>
<div class='row'><div class='col-sm-9'>".$userTitle."</div><div class='col-sm-3'><a href='#' style='float:right'>(".$name.")</a></div></div>

  </div>
  <div class='card-body'>
    <p class='card-text'><td>".$userDescription."</td></p>
  </div>
</div>";
     		    
   	$sn++;
   	}
   echo "</table>";
   }else{
   	echo "sorry";
   }
?>
</body>
</html>