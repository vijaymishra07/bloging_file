 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>profile</title>
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
<p>Your Name Is <b><?php  echo $_SESSION['vijay_name'];  ?></b></p>
<p>Your Email Is <b><?php  echo $_SESSION['myemail'];  ?></b></p>
<p>Your Mobile Is <b><?php  echo $_SESSION['mymobile_no'];  ?></b></p>
</body>
</html>