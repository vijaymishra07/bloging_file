<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>blog home page</title>
	<style type="text/css">
		.navbaar ul {
			display: flex;
			margin: 20px;
		}
		.navbaar ul a{
			margin: 20px;
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
	<div class="navbaar">
		<?php include "navbar.php"; ?>
	</div>
<div class="container pt-5">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="card">
			  <div class="card-body">
			  	<form action="db_insert.php" method="post">
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
</body>
</html>