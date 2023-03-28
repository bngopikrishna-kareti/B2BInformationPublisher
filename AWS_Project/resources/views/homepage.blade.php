<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
      function log_out(){
        window.location = '/';
      }
      function sector_page(){
        window.location = '/sector_page';
      }
    </script>
</head>
<body>
   <h1> <div class="shadow-sm p-3 mb-5 bg-body rounded">Idea Investments</div></h1>
<img src={{asset('/images/admin_login_logo.jpg')}} class="rounded float-end" alt="...">
<br>
<p class="font-monospace">Welcome Back Admin!</p>
<div class="btn-group">
    
  <div>
    <button type="button" class="btn btn-warning" id="liveToastBtn" onclick="sector_page()">Ideas</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="AddIdea.html">Add Ideas</a></li>
      <li><a class="dropdown-item" href="#">Edit Existing Idea</a></li>
      <li><a class="dropdown-item" href="Remove idea.html">Kill Idea</a></li>
      <li><hr class="dropdown-divider"></li>
    </ul>
  </div>
  <br>
  <a href="clents view.html"><button type="button" class="btn btn-warning" id="liveToastBtn">Clients</button></a>
  <div class="btn-group">
    <a href="RM Page.html"><button type="button" class="btn btn-warning" id="liveToastBtn">RM</button></a>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="Add RMs.html">Add RM</a></li>
      <li><a class="dropdown-item" href="#">Edit RM Info</a></li>
      <li><a class="dropdown-item" href="Delete RMs.html">Delete RM</a></li>
      </ul>
  </div>
   
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Details</ha5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          First Name : Sri Lakshmi<br>
          Last Name  : Alavakonda<br>
          Email      : sa2279@student.aru.ac.uk<br>
          Phone no   : 00000000000<br>

        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Edit</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Edit Details Here</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">First Name:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
           
          </form>
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Last Name:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            
          </form>
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>  
          </form>
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Phone Number:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
          </form>
          <form>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
        </div>
          </form>
      </div>
    </div>
  </div>
  <a class="btn btn-warning" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Account</a><br>
  <button type="button" class="btn btn-danger" id="liveToastBtn" onclick="log_out()">Logout</button>
</div>
  <br>
  <body data-bs-spy="scroll" data-bs-target="#navbar-example">
    Notification View Center
    <div id="navbar-example">
      <ul class="nav nav-tabs" role="tablist">
        <div id="list-example" class="list-group">
          <a class="list-group-item list-group-item-action" href="#list-item-1">Notification 1</a>
          <a class="list-group-item list-group-item-action" href="#list-item-2">Notification 2</a>
          <a class="list-group-item list-group-item-action" href="#list-item-3">Notification 3</a>
          <a class="list-group-item list-group-item-action" href="#list-item-4">Notification 4</a>
        </div>
      </ul>
    </div>
  </body>

  <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <h4 id="list-item-1">Notification 1</h4>
    <p>User Id<br>
      Name Here<br>
      phone number :<br>
      And here comes the complete notification that is mentioned by the user to the admin stating that it is one of the notification.<br>
    </p>
    <h4 id="list-item-2">Notification 2</h4>
    <p>User Id<br>
      Name Here<br>
      phone number :<br>
      And here comes the complete notification that is mentioned by the user to the admin stating that it is one of the notification.<br>
    </p>
    <h4 id="list-item-3">Notification 3</h4>
    <p>User Id<br>
      Name Here<br>
      phone number :<br>
      And here comes the complete notification that is mentioned by the user to the admin stating that it is one of the notification.<br>
    </p>
    <h4 id="list-item-4">Notification 4</h4>
    <p>User Id<br>
      Name Here<br>
      phone number :<br>
      And here comes the complete notification that is mentioned by the user to the admin stating that it is one of the notification.<br>
    </p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>