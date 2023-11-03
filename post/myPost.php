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
     		  <h5 class='card-header'></td>(".$sn.")&nbsp;&nbsp;&nbsp;<td>".$userTitle."</td></h5>

			  <div class='card-body'>
			    <p class='card-text'>".$userDescription."</p>
			  </div>
		     		<form action='postUpdate.php' method='post'>
		     		<input type='hidden' name='post_id' value='".$post_id."'>
		     	    <button type='button' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick='editData(".$post_id.");' name='edit' class='btn btn-primary'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;&nbsp;	
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
	function editData(id) {
		$.get('postCurd.php?edit123=raipur&cg='+id,function(xyz){
			console.log(xyz);
			var data = JSON.parse(xyz);
			$('#title_vijay').val(data.title);
			$('#description').val(data.description);
			$('#vijayId').val(data.Id);


		});

		
	}



	function deleteData(id) {
		if(confirm('Click to delete button')){
			$.ajax({
				url:'postCurd.php',
				method:'post',
				data:'post_id='+id+"&delete=ok",
				success:function(result){
					console.log(result);
					if(result=="Deleted"){
						window.location.reload();

						
					}
				}
			})
		}
	}
</script>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Post update form -->
			  	<form action="postCurd.php" method="post" id="postForm">
				  <div class="mb-3">
				  <input type="hidden" class="form-control" name="updatePost" value="mishra" aria-describedby="emailHelp">				    
				    <input type="hidden" class="form-control" name="mishra_id" id="vijayId" aria-describedby="emailHelp">				    
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Title</label>
				    <input type="text" class="form-control" name="user_title" id="title_vijay" aria-describedby="emailHelp">				    
				  </div>
				  <div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">Description</label>
				    <textarea input type="text" name="user_description" class="form-control" id="description" aria-describedby="emailHelp"></textarea>
				  </div>

				</form>
				<!-- ------the end------- -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="updatePost();" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
	function updatePost(){
		//console.log('save change button call');
		var vijay = $('#postForm').serialize();
		console.log(vijay);
		$.ajax({
			url: "postCurd.php",
			method: "POST",
			data: vijay,
			success:function (vijayResponse){
				if(vijayResponse=="indiaupdated"){
					alert('this value is updated');
					window.location.reload();
				}
			}
		})
	}
</script>
</body>
</html>


