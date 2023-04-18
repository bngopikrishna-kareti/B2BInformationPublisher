<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>update</title>
</head>
<body>

   <h1> <div class="shadow-sm p-3 mb-5 bg-body rounded">Idea Investments</div></h1>
<img src="logo.jpg" class="rounded float-end" alt="...">
<br>
<p class="font-monospace">Welcome Back Admin!</p>
<div class="btn-group">
    <a href="index.php"><button type="button" class="btn btn-warning" id="liveToastBtn">Home</button></a></div>
   
  </div>
  <a href="/adminclient/show.php"><button type="button" class="btn btn-warning" id="liveToastBtn">Clients</button></a>
  
  <div class="btn-group">
  <a href="/adminrmview/show.php"><button type="button" class="btn btn-warning" id="liveToastBtn">RM</button></a>    
  </div>
  <a href="/adminprofile/show.php"><button type="button" class="btn btn-warning">Profile</button></a>
  <a href="/adminlogin/userlogin.php"><button type="button" class="btn btn-danger">Logout</button></a>
  <br>
</br>
  <form action="" method="get">
	<input type="text" name="id" placeholder="id" value="<?php echo $_GET['id']; ?>"><br><br>
	<input type="text" name="firstname" placeholder="firstname" value="<?php echo $_GET['firstname']; ?>"><br><br>
	<input type="text" name="lastname" placeholder="lastname" value="<?php echo $_GET['lastname']; ?>" ><br><br>
	<input type="gmail" name="gmail" placeholder="gmail" value="<?php echo $_GET['gmail']; ?>"><br><br>
	<input type="text" name="number" placeholder="number" value="<?php echo $_GET['number']; ?>"><br><br>
	<input type="text" name="address" placeholder="address" value="<?php echo $_GET['address']; ?>"><br><br>
	<input type="submit" name="submit" value="update">
</form>
<?php
error_reporting(0);
include ('connection.php');
if ($_GET['submit'])
{
	$id = $_GET['id'];
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$gmail = $_GET['gmail'];
	$number = $_GET['number'];
	$address = $_GET['address'];
 	$sql="UPDATE rm SET firstname='$firstname' , lastname='$lastname', gmail='$gmail' , number='$number', address='$address'   WHERE id='$id'";
 	$data=mysqli_query($con, $sql);
 	if ($data) {
 		//echo "record update";
 		header('location:show.php');
 	}
 	else{
 		echo "not update";
 	}
}
else
{
	echo "click on  button to save the change";
}
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
