<?php
 include('../db.php');
   $str = "SELECT * FROM post ";
   $query=mysqli_query($convij,$str);

   if ($query){
   	echo "<table border='2'>
     				<tr><th>Title</th><th>Description</th></tr>";
     	while($row = mysqli_fetch_array($query)){
     		$user_id = $row['id'];
     		$userTitle = $row['user_title'];
     		$userDescription = $row['user_description'];
     		echo "<tr><td>".$userTitle."</td>
		     		<td>".$userDescription."</td>
		     		<td>
		     		<form action='postUpdate.php' method='post'>
		     			<input type='hidden' name='user_id' value='".$user_id."'>
		     			<button name='edit'>Edit</button>
		     		</form>
		     		</td>
	     		</tr>";
   	}
   echo "</table>";
   }else{
   	echo "sorry";
   }
?>