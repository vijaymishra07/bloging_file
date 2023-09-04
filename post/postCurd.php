<?php
include('../connection.php');
if (isset($_POST['submit_button'])){
	//extract($_POST);
   session_start();
   $user_id=$_SESSION["user_id"];
   $user_title = $_POST['user_title'];
   $user_description = $_POST['user_description'];
   $str = "INSERT INTO post SET title='$user_title', description='$user_description', userId='$user_id'";
   $query =mysqli_query($con, $str); 
if ($query){
       echo "<!DOCTYPE html>
<html>
<head>
    <title></title>
   <meta http-equiv='refresh' content='3; url = myPost.php'>
</head>
<body>
<h2>success fully register</h2>
<p>Plese waite ...<p>
</body>
</html>";
   }else{
   	echo "not";
   }
}
//var_dump($_POST);
// echo($_POST['user_title']);
// echo($_POST['user_description']);
?>