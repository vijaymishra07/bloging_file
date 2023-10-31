<?php

include "connection.php";

if (isset($_POST['submit_button'])) {
	extract($_POST);
	echo "vijay";
	    $encrypt_password = md5($password);

	 $str="SELECT * FROM users WHERE email='$email' AND password='$encrypt_password'";
	 		
		$query=mysqli_query($con, $str);
		if (mysqli_num_rows($query)==1) {
			$data = mysqli_fetch_array($query);
			$name = $data['name'];
			$Email = $data['email'];
			$MobileNo = $data['mobile_no'];
		    $userid = $data['id'];
			$role = $data['role'];
			session_start();
			$_SESSION['vijay_name'] = $name;
			$_SESSION['myemail'] = $Email;
			$_SESSION['mymobile_no'] = $MobileNo;
			$_SESSION['user_id'] = $userid;
			$_SESSION['role'] =$role;
			header("location: profile.php");
		}else{
			echo "sorry";
		}
	
}

if(isset($_GET['logout'])){
	session_start();
			$_SESSION['vijay_name'] = '';
			$_SESSION['myemail'] = '';
			$_SESSION['mymobile_no'] = '';
header('location: login.php?success=ok');
}

?>	