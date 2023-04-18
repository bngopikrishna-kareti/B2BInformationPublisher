<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>insert</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php
error_reporting(0);
include 'connection.php';
if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gmail = $_POST['gmail'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$username = $_POST['username'];
	$password= $_POST['password'];
	$sql = "INSERT INTO `client` VALUES ('$id','$firstname','$lastname','$gmail','$number','$address','$username','$password')";
	$data=mysqli_query($con,$sql);
	if ($data) {
		echo "Registerd Succesfully";
	}else
	{
		echo "sorry";
	}
}
?>
   <h1> <div class="shadow-sm p-3 mb-5 bg-body rounded">Idea Investments</div></h1>
<img src="logo.jpg" class="rounded float-end" alt="...">
<br>
<p class="font-monospace">Register here!</p>

  <div class="row text-center">
	<div class="container">
		<h4>Enter Your Details</h4>
	<form action="index.php" method="post">
	<input type="text" name="firstname" placeholder="Your Name"><br><br>
	<input type="text" name="lastname" placeholder="Fields of intrest"><br><br>
	<input type="gmail" name="gmail" placeholder="gmail"><br><br>
	<input type="text" name="number" placeholder="Phone"><br><br>
	<input type="text" name="address" placeholder="Address"><br><br>
  <input type="text" name="password" placeholder="Create Your Password"><br><br>


	<input type="submit" class="btn btn-warning" name="submit" value="Enroll"><br><br>
	<a href="/adminlogin/userlogin.php"><button type="button" class="btn btn-danger btn-sm">Login</button></a>

	</form>
	</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
