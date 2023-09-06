<?php
include('../connection.php');
//post insert ke liye hai
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
<h2>success fully </h2>
<p>Plese waite ...<p>
</body>
</html>";
   }else{
   	echo "not";
   }
}




//post update ke liye hai
if (isset($_POST['update_button'])){
    //extract($_POST);
   session_start();
   $post_id=$_POST["post_id"];
   $user_title = $_POST['user_title'];
   $user_description = $_POST['user_description'];
   $str = "UPDATE post SET title='$user_title', description='$user_description' WHERE Id='$post_id'";
   $query =mysqli_query($con, $str); 
if ($query){
       echo "<!DOCTYPE html>
<html>
<head>
    <title></title>
   <meta http-equiv='refresh' content='3; url = myPost.php'>
</head>
<body>
<h2>success fully updated</h2>
<p>Plese waite ...<p>
</body>
</html>";
   }else{
    echo "not";
   }
}


//delete post ke liye
if (isset($_POST['delete'])){
    //extract($_POST);
   session_start();
   $post_id=$_POST["post_id"];
   $str = "DELETE FROM post WHERE Id='$post_id'";
   echo $str;
   $query =mysqli_query($con, $str); 
if ($query){
       echo "<!DOCTYPE html>
<html>
<head>
    <title></title>
   <meta http-equiv='refresh' content='3; url = myPost.php'>
</head>
<body>
<h2>success fully Deleted</h2>
<p>Plese waite ...<p>
</body>
</html>";
   }else{
    echo "not";
   }
}
?>