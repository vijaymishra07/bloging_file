<?php
if ($_POST['file_uplode']) {
$vij_name = $_FILES['vijuplode']['tmp_name'];
$real_name = "fileimg/".$_FILES['vijuplode']['name'];

move_uploaded_file($vij_name, $real_name);
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
	echo "sorry";
}

// if(null){
// 	echo "11111111111";
// }else{
// 	echo "222222222222";
// }

?>