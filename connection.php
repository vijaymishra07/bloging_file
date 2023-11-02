<?php
$con = mysqli_connect("localhost","root","","vjyphp");
if ($con) {
	echo "connect";
}else{
	echo "not connect";
}

$base_url = "http://localhost/vjyphp/";

// function getUserData($userId,$db){
//  $str = "SELECT * FROM users WHERE id='$userId'";
//  $query = mysqli_query($db, $str);
//  $data = mysqli_fetch_array($query);
//  return $data;
// }

?>