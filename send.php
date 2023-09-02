<?php
session_start();  
if (isset($_POST['updateForm'])) {
    extract($_POST);
    $user_id = $_SESSION['user_id'];
    include('db.php');
  echo $str = "UPDATE cratetable SET email='$email', state='$state', name='$name', city='$city', mobile_no='$num', gender='$radio' WHERE id=$user_id";
   $query=mysqli_query($convij, $str);
   if ($query){
       echo "<!DOCTYPE html>
<html>
<head>
    <title></title>
   <meta http-equiv='refresh' content='3; url = login.php'>
</head>
<body>
<h2>success fully register</h2>
<p>Plese waite ...<p>
</body>
</html>";
   }else{
    echo "not defined";
   }
 
}



?>