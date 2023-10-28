<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>my post</title>
</head>
<body>
<?php
session_start();
 include('../connection.php');
     $user_id =$_SESSION['user_id'];

   $str = "SELECT * FROM post WHERE userId='$user_id' ORDER BY Id DESC";
   $query=mysqli_query($con,$str);

   include "../navbar.php";
   
   if ($query){

   	echo "";
     				$sn =1;
     	while($row = mysqli_fetch_array($query)){
     		$post_id = $row['Id'];
     		$userTitle = $row['title'];
     		$userDescription = $row['description'];
     		echo "
     		<div class='container'>
     		<div class='row'>
     		<div class='col-sm-2'></div>
     		<div class='col-sm-8'>
     		<div class='card mt-4'>
     		  <h5 class='card-header'></td><td>".$userTitle."</td></h5>

			  <div class='card-body'>
			    <p class='card-text'><tr><td>".$sn."<td>".$userDescription."</td></p>
			  </div>
		     		<form action='postUpdate.php' method='post'>
		     		<input type='hidden' name='post_id' value='".$post_id."'>
		     	    <button type='button' onclick='editData();' name='edit' class='btn btn-primary'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;&nbsp;	
		     		<button type='button' onclick='deleteData(".$post_id.");' name='delete'class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></button>
		     		</form>		     		
		     		</div>		     				     		
		     		</div>
		     		<div class='col-sm-2'></div>
	     		</div>
	     		</div>";
   	$sn++;
   	}
   
   }else{
   	echo "sorry";
   }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
	function editData() {
		alert('Click to adit button');
	}



	function deleteData(id) {
		if(confirm('Click to delete button')){
			$.ajax({
				url:'postCurd.php',
				method:'post',
				data:'post_id='+id+"&delete=ok",
				success:function(result){
					console.log(result);
				}
			})
		}
	}
</script>
</body>
</html>


