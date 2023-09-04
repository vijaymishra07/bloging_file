<?php
$con = mysqli_connect("localhost","root","","vjyphp");
if ($con) {
	echo "connect";
}else{
	echo "not connect";
}
?>