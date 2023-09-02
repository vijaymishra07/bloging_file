<?php 
session_start();  
@$email = $_SESSION['myemail'];
if($email == ""){
	header("location: login.php");
}


     include('db.php');
 $user_id = $_SESSION['user_id'];

  $str = "SELECT *  FROM cratetable WHERE id = ".$user_id;
  $query=mysqli_query($convij,$str);
  $updateData = mysqli_fetch_array($query);
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>profile</title>
	<style type="text/css">
		.navbaar ul {
			display: flex;
			margin: 20px;
		}
		.navbaar ul a{
			margin: 20px;
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
	<div class="navbaar">
		<?php include "navbar.php"; ?>
		<form action="send.php" method="post">
  <input type="hidden" name="user_id">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name"  value="<?php echo $updateData['name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email"  value="<?php echo $updateData['email']; ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile No.</label>
    <input type="number" name="num"  value="<?php echo $updateData['mobile_no']; ?>"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-check">
  <input class="form-check-input" <?php if($updateData["gender"] == "female") echo "checked" ?> value="female" type="radio" name="radio" id="flexRadioDefault1"/>
  <label class="form-check-label" for="flexRadioDefault1">
    female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" <?php if($updateData['gender'] == 'male') echo 'checked' ?>  type="radio" value="male" name="radio" id="flexRadioDefault2"/>
  <label class="form-check-label" for="flexRadioDefault2">
    Male
  </label>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your City</label>
    <input type="text" name="city" value="<?php echo $updateData['city']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">   
  </div>
<label for="cars">Select your state:</label>
  <select name="state" id="cars" value="<?php echo $updateData['state']; ?>">
    <option value="Chhattisgarh"  <?php if($updateData['state'] == 'Chhattisgarh') echo 'selected' ?>>Chhattisgarh</option>
    <option value="Bihar" <?php if($updateData['state'] == 'Bihar') echo 'selected' ?>>Bihar</option>
    <option value="gujraat" <?php if($updateData['state'] == 'gujraat') echo 'selected' ?>>gujraat</option>
    <option value="Uttar Pradesh" value="gujraat" <?php if($updateData['state'] == 'Uttar Pradesh') echo 'selected' ?> >Uttar Pradesh</option>
  </select>
  <br><br>
  <div class="mb-3 form-check">
    <input type="checkbox" name="term" value="Term's Accept" class="form-check-input" id="exampleCheck1">
  </div>
  <button type="submit" class="btn btn-primary" name="updateForm">Update Form</button>
</form>
	</div>
</body>
</html>