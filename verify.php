<?php 
include("mail.php");
include("connection.php");

$verify = $_GET['verify'];
$email = $_GET['email'];
$name = $_GET['name'];

$str="SELECT * FROM users WHERE email='$email' AND verify='$verify'";
	 		
		$query=mysqli_query($con, $str);
		if (mysqli_num_rows($query)==1) {

			$str1="UPDATE users SET verify='ok' WHERE email='$email'";
			mysqli_query($con, $str1);

			vjyMail($_SESSION['mail'],$name,$email,"Email Verified","You are verified to Bijnes Didi","Welcomes you nare verified");

		}else{
			echo "sorry";
		}

?>