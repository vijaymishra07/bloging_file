<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
<form action="send.php" method="post">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="vijay" class="form-control" id="exampleInputPassword1">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile No.</label>
    <input type="number" name="num" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-check">
  <input class="form-check-input" value="female" type="radio" name="radio" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="male" name="radio" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Male
  </label>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your City</label>
    <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
<label for="cars">Select your state:</label>
  <select name="state" id="cars">
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Bihar">Bihar</option>
    <option value="gujraat">gujraat</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
  </select>
  <br><br>
  <div class="mb-3 form-check">
    <input type="checkbox" name="" value="Term's Accept" class="form-check-input" id="exampleCheck1">
  </div>
  <input type="submit" class="btn btn-primary" name="insertForm" value="Register">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

