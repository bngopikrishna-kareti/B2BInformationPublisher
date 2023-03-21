<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dash Board</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}

    .table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
height: 350px;
}

.td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

.tr:nth-child(even) {
  background-color: #dddddd;
}
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
 
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Idea Investment</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Age</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Idea Investment</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
         <li><a href="clients.html">clients</a></li>
        <li><a href="ideas.html">Ideas</a></li>
        <li><a href="RM.html">relationship managers</a></li>
<li><a href="profile.html">Account</a></li>
<li><a href="page2.html">Log Out</a></li>
    </div>
    <br>
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-end">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Hi San!</a>
        <li class="page-item">
          <a class="page-link" href="profile.html">Profile</a>
        </li>
      </ul>
    </nav>
<h3>Ideas</h3><nav aria-label="Page navigation">
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link" href="add idea.html">Add Idea</a>
    </li>
  </ul>
</nav>

<table>
<h2>
  <tr>
    <th>Sector</th>
    <th>Product Provided</th>
    <th>Country</th>
<th>Amount</th>
<th>Profit rating</th>
  </tr>

  <tr>
    <td>Private</td>
        <td>AR travels</td>
    <td>India</td>
 <td>1000</td>
<td>60%</td>
  </tr>

  <tr> 
    <td>Banking</td>
    <td>SBI</td>
    <td>UK</td>
 <td>2000</td>
 <td>40%</td>
  </tr>

  <tr>
    <td>Shares</td>
    <td>Edu Tech</td>
    <td>Austria</td>
 	<td>3000</td>
	 <td>47%</td>
  </tr>

  <tr>
    <td> Trading</td>
    <td> Black Berry</td>
    <td>UK</td>
 <td>4000</td>
 <td>80%</td>
  </tr>
  </h2>
</table>

    
    
</body>
</html>