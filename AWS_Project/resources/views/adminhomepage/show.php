<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>show table</title>
</head>
<body>


   <h1> <div class="shadow-sm p-3 mb-5 bg-body rounded">Idea Investments</div></h1>
<img src="logo.jpg" class="rounded float-end" alt="...">
<br>
<p class="font-monospace">Welcome Back Admin!</p>
<div class="btn-group">
    
    <a href="index.php"><button type="button" class="btn btn-warning" id="liveToastBtn">Add Ideas</button></a></div>
    <a href="/adminclient/show.php"><button type="button" class="btn btn-warning" id="liveToastBtn">Clients</button></a>

  <div class="btn-group">
  <a href="/adminrmview/show.php"><button type="button" class="btn btn-warning" id="liveToastBtn">RM</button></a>   
  </div>
  <a href="/adminprofile/show.php"><button type="button" class="btn btn-warning">Profile</button></a>
  <a href="/adminlogin/userlogin.php"><button type="button" class="btn btn-danger" id="liveToastBtn">Logout</button></a><br>
  <br><center>
  <h2>List Of Ideas</h2>
</center>
</br>
  <?php
include ('connection.php');
$sql ="select * from reg";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if ($total=mysqli_num_rows($data)) {
	?>
	<table border="2">
    <table class="table table-dark">
<tr>
<th>id</th>
<th>Company Name</th>
<th>Idea Type</th>
<th>gmail</th>
<th>Price Of An Idea(1 Unit)</th>
<th>address</th>
<th>Update</th>
<th>Delete</th>
</tr>
	<?php
	while ($result = mysqli_fetch_array($data)) {
		echo "
			<tr>
				<td>".$result['id']."</td>
				<td>".$result['firstname']."</td>
				<td>".$result['lastname']."</td>
				<td>".$result['gmail']."</td>
				<td>".$result['number']."</td>
				<td>".$result['address']."</td>
				<td><a href='update.php?id=$result[id] & firstname=$result[firstname] & lastname=$result[lastname] & gmail=$result[gmail] & number=$result[number] &address=$result[address]'> update </a></td>
				<td><a href='delete.php?id=$result[id] '>delete </a></td>
			</tr>
		";
	}
}
else
{
 	echo "no record found";
}
?>
</table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>