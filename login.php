<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>login</title>
</head>
<body>
	<div class="container pt-5">
		<div class="row">
			<div class="col-sm-4">
				<?php
					if (isset($_GET['success'])) {
						echo "You are successfully logout";
					}
				?>
			</div>
			<div class="col-sm-4">
				<div class="card">
				  <div class="card-body">
				   <form action="submitUpdate.php" method="post">
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
					  </div>
					  <div class="mb-3 form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Check me out</label>
					  </div>
					  <button type="submit" name="submit_button" class="btn btn-primary" value="Login Submit">Login</button>
					</form>
				  </div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>