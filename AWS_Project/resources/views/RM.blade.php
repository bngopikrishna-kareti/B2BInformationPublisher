

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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
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
      </ul><br>
    </div>
    <br>
    
<h2>Relationship Managers</h2>

<table>
  <tr>
    <th>Name</th>
    <th>working sector</th>
    <th>Clients</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Sanath</td>
    <td>Transport</td>
        <td>client names</td>

    <td>1234567891</td>
    <td>India</td>
  </tr>
  <tr>
    <td>Meghana</td>
    <td>Banking</td>
    <td>client names</td>
        <td>35645587698</td>
    <td>UK</td>

  </tr>
  <tr>
    <td>Sri</td>
    <td>Shares</td>
        <td>client names</td>
    <td>47089557878</td>
    <td>Austria</td>
  </tr>
  <tr>
      <td>Sai</td>
    <td> Trading</td>
    <td>client names</td>
        <td>5667587606</td>

    <td>UK</td>
  </tr>
  
</table>

</body>
</html>