<?php
session_start();
include "connection.php";
$user_id = $_SESSION['user_id'];

//password update if
if (isset($_POST['passwordChange'])) {
    // Check old password
$loggedInData = getUserData($user_id,$con);

if($loggedInData['password'] === md5($_POST['oldPassword'])){
    if($loggedInData['password'] != $_POST['confirmPassword']){

    // Update Password in db
   $new_pass = $_POST['confirmPassword'];

   $encrypt_password = md5($new_pass);
   $passStr = "UPDATE users SET password='$encrypt_password' WHERE id='$user_id'";
              
          $query = mysqli_query($con,  $passStr);

        echo "<!DOCTYPE html>
        <html>
        <head>
            <title></title>
           <meta http-equiv='refresh' content='2; url = profile.php'>
        </head>
        <body>
        <h2>Password successfully updated </h2>
        <p>Plese waite ...<p>
        </body>
        </html>";
            }
          }else{
            echo "Old password is not matched";
          }
}
//for file uplode

if (isset($_POST['file_uplode'])) {
 $vij_name = $_FILES['vijuplode']['tmp_name'];
 $real_name = "fileimg/".$_FILES['vijuplode']['name'];
 move_uploaded_file($vij_name, $real_name);

// get old uploaded file name
 $str = "SELECT *  FROM users WHERE id = ".$user_id;
  $query=mysqli_query($con,$str);
  $updateData = mysqli_fetch_array($query);
  $photo = $updateData['photo'];
  if(file_exists($photo)){
   unlink($photo);
  }
    
  
 //Update photo in db table
    $str = "UPDATE users SET photo='$real_name' WHERE id='$user_id'";

      $query = mysqli_query($con, $str);
      // $str;
    if($query){
       echo "<!DOCTYPE html>
    <html>
    <head>
        <title></title>
       <meta http-equiv='refresh' content='2; url = profile.php'>
    </head>
    <body>
    <h2>File successfully updated </h2>
    <p>Plese waite ...<p>
    </body>
    </html>"; 
    }else{
    echo "Sorry file not uploaded !!!";
    }
}
?>