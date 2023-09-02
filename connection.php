<?php
$str = mysqli_connect("localhost","root","","vjyphp");
if ($str) {
	echo "connect";
}else{
	echo "not connect";
}
?>