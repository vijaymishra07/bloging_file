<?php
include('connection.php');
if (isset($_POST['submit_button'])){
	extract($_POST);
   session_start();
   $user_id=$_SESSION["user_id"];
   $con = "INSERT INTO post SET title='$user_title', description='$user_description', userId='$user_id'";
   $query =mysqli_query($str, $con); 
if ($query) {
echo "success";
   }else{
   	echo "not";
   }
}
?>