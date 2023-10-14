<?php
include("mail.php");
include('connection.php');

if (isset($_POST['updateForm'])) {
    extract($_POST);
    $user_id = $_SESSION['user_id'];
    include('connection.php');
  echo $str = "UPDATE users SET email='$email', state='$state', name='$name', city='$city', mobile_no='$num', gender='$radio' WHERE id=$user_id";
   $query=mysqli_query($con, $str);
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

if (isset($_POST['insertForm'])) {
    extract($_POST);
    $user_id = $_SESSION['user_id'];
    
    $random_number = rand(100,999999);
     $encripted_password = md5($vijay);
   $str = "INSERT INTO users SET email='$email', state='$state', name='$name', city='$city', password='$encripted_password', mobile_no='$num', gender='$radio',verify='$random_number'";
   $query=mysqli_query($con, $str);

 $verify_link = "http://192.168.1.5/vjyphp/verify.php?verify=". $random_number."&email=".urlencode($email). "&name=".$name;

 vjyMail($_SESSION['mail'],$name,$email,"Verify Your Email","Please verify your email to use our service. Click this link to verify <a href='".$verify_link."'>VERIFY ME</a>","Check your Email for Verification link.");
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