<?php
session_start();
 include('../connection.php');
     $user_id =$_SESSION['user_id'];

   $str = "SELECT * FROM post WHERE userId='$user_id' ORDER BY Id DESC";
   $query=mysqli_query($con,$str);

   include "../navbar.php";
   
   if ($query){

   	echo "<table border='2'>

     				<tr><th>SN.</th><th>Title</th><th>Description</th><th>Action</th></tr>";
     				$sn =1;
     	while($row = mysqli_fetch_array($query)){
     		$post_id = $row['Id'];
     		$userTitle = $row['title'];
     		$userDescription = $row['description'];
     		echo "
     		    <tr><td>".$sn."</td>
     		    <td>".$userTitle."</td>
		     		<td>".$userDescription."</td>
		     		<td>
		     		<form action='postUpdate.php' method='post'>
		     			<input type='hidden' name='post_id' value='".$post_id."'>
		     			<button name='edit'>Edit</button>
		     		</form>
		     		<form action='postCurd.php' method='post'>
		     			<input type='hidden' name='post_id' value='".$post_id."'>
		     			<button name='delete'>Delete</button>
		     		</form>
		     		</td>
	     		</tr>";
   	$sn++;
   	}
   echo "</table>";
   }else{
   	echo "sorry";
   }
?>