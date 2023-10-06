<?php 
include("mail.php");
echo $_GET['verify'];
$_GET['email'];
vjyMail($_SESSION['mail'],$name,$email,"Email Verified","Welcomes to Bijnes Didi");
?>