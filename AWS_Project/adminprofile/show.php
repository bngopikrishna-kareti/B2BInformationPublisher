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
        
        <a href="/adminhomepage/show.php"><button type="button" class="btn btn-warning" id="liveToastBtn">Home</button></a></div>
     
      </div>
       
      <a href="/adminlogin/userlogin.php"><button type="button" class="btn btn-danger" id="liveToastBtn">Logout</button></a>
    <div class="student-profile py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                  <img class="profile_img" src="displayimage.jpg" alt="student dp">
                  <h3>Sri Lakhsmi</h3>
                </div>
                <div class="card-body">
                  <p class="mb-0"><strong class="pr-1">User ID:</strong>  srilakshmi@gmail.com</p>
                  <p class="mb-0"><strong class="pr-1">Designation: </strong>Admin</p>
                  <p class="mb-0"><strong class="pr-1">Fields Intrested: </strong>Tech, AI, Auto Mobile</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                </div>
</br>
  <?php
include ('connection.php');
$sql ="select * from adprofile";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if ($total=mysqli_num_rows($data)) {
	?>
	<table border="2">
    <table class="table table-dark">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>gmail</th>
<th>Contact Info.</th>
<th>address</th>
<th>Update</th>
</tr>
	<?php
	while ($result = mysqli_fetch_array($data)) {
		echo "
			<tr>
				<td>".$result['firstname']."</td>
				<td>".$result['lastname']."</td>
				<td>".$result['gmail']."</td>
				<td>".$result['number']."</td>
				<td>".$result['address']."</td>
				<td><a href='update.php?id=$result[id] & firstname=$result[firstname] & lastname=$result[lastname] & gmail=$result[gmail] & number=$result[number] &address=$result[address]'> update </a></td>
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
                <div class="card-body pt-0">
                  
                  </table>
                </div>
              </div>
                <div style="height: 26px"></div>
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                </div>
                <div class="card-body pt-0">
                    <p>Sri Lakshmi Alavakonda(Admin), Generally deals with Idea creations and Relational Managers.<br>
                    Currently haveing efficient trust from customers in our family of IDEA INVESTMENT.
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>