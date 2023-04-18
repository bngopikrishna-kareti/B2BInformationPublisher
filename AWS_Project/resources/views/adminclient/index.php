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
	$sql = "INSERT INTO `client` VALUES ('$id','$firstname','$lastname','$gmail','$number','$address','$username','$password')";
	$data=mysqli_query($con,$sql);
	if ($data) {
		echo "New Client Added (Congrats Admin!)";
	}else
	{
		echo "sorry";
	}
}
?>
   <h1> <div class="shadow-sm p-3 mb-5 bg-body rounded">Idea Investments</div></h1>
<img src="logo.jpg" class="rounded float-end" alt="...">
<br>
<p class="font-monospace">Welcome Back Admin!</p>
<div class="btn-group">
  </div>
<a href="/adminhomepage/show.php"><button type="button" class="btn btn-warning" id="liveToastBtn">Home</button></a></div>
<a href="/adminclient/show.php"><button type="button" class="btn btn-warning" id="liveToastBtn">Clients</button></a>
 <a href="/adminrmview/show.php"><button type="button" class="btn btn-warning" id="liveToastBtn">RM</button></a>
  <a href="/adminhomepage/show.php"><button type="button" class="btn btn-danger">Ideas</button></a>
  <a href="/adminprofile/show.php"><button type="button" class="btn btn-warning">Profile</button></a>
  <a href="/adminlogin/userlogin.php"><button type="button" class="btn btn-danger">Logout</button></a>
  <div class="row text-center">
	<div class="container">
		<h4>Wanna Add a Client?</h4>
    <h4>Enter Details Here</h4>
	<form action="index.php" method="post">
	<input type="text" name="firstname" placeholder="Name of Client"><br><br>
	<input type="text" name="lastname" placeholder="Intrested Field"><br><br>
	<input type="gmail" name="gmail" placeholder="gmail"><br><br>
	<input type="text" name="number" placeholder="Phone Number"><br><br>
	<input type="text" name="address" placeholder="Address"><br><br>
	<input type="submit" class="btn btn-warning" name="submit" value="insert"><br><br>
	</form>
<button><a class="btn btn-danger" href="show.php">show Clients</a></button>
	</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>