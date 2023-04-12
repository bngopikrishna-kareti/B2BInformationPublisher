<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
       function homepage(){
        window.location = '/homepage';
      }
      function admin_password_reset(){
        window.location = '/adminpasswordreset';
      }

      function register_user(){
        window.location='/registerasuser';
      }
      function log_out(){
        window.location = '/';
      }
      function sector_page(){
        window.location = '/sector_page';
      }
      function AddIdea(){
        window.location = '/AddIdea';
      }
      function Remove_Idea(){
        window.location = '/Remove_Idea';
      }
      function clients_view(){
        window.location ='/clients_view';
      }
      function Add_RMs(){
        window.location ='/Add_RMs';
      }
      function Delete_RMs(){
        window.location ='/Delete_RMs';
      }
      function available_ideas(){
        console.log("inside_available_ideas");
        window.location = '/available_ideas';
      }

    </script>
    </head>
<body>
   <h1> <div class="shadow-sm p-3 mb-5 bg-body rounded">Idea Investments</div></h1>
   <img src={{asset('/images/admin_login_logo.jpg')}} class="rounded float-end" alt="...">
<br>
<p class="font-monospace">Welcome Back Admin!</p>
<div class="btn-group">
    
<button type="button" class="btn btn-warning" id="liveToastBtn" onclick="home_page()">Home</button></div>
    <div class="btn-group">
    <button type="button" class="btn btn-warning" id="liveToastBtn" onclick="sector_page()">Ideas</button>
      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="visually-hidden">Toggle Dropdown</span>
      </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="available ideas.html">Veiw Ideas</a></li>
      <li class="dropdown-item" onclick="AddIdea()">Add Ideas</li>
      <li><a class="dropdown-item" href="#">Edit Existing Idea</a></li>
      <li class="dropdown-item" onclick="Remove_Idea()">Kill Idea</li>
      <li><hr class="dropdown-divider"></li>
    </ul>
  </div>
  <button type="button" class="btn btn-warning" onclick="clients_view()" id="liveToastBtn">Clients</button>
  <div class="btn-group">
    <a href="RM Page.html"><button type="button" class="btn btn-warning" id="liveToastBtn">RM</button></a>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
 
    <ul class="dropdown-menu">
    <li class="dropdown-item"  onclick="Add_RMs()">Add RM</li>
      <li><a class="dropdown-item" href="#">Edit RM Info</a></li>
      <li class="dropdown-item" onclick="Delete_RMs()">Delete RM</li>
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
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-warning" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Account</a>
  <button type="button" class="btn btn-danger" id="liveToastBtn" onclick="log_out()">Logout</button>

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">User Count</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Region</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>mdo@gmail.com</td>
        <td>7964317946</td>
        <td>Russia</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>jt@hotmail.com</td>
        <td>758385241</td>
        <td>Phillipines</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>Lade</td>
        <td>ll@twitter</td>
        <td>785214854</td>
        <td>Africa</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Meg</td>
        <td>Aade</td>
        <td>Deml@outlook.com</td>
        <td>785214854</td>
        <td>Africa</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Lucy</td>
        <td>Eve</td>
        <td>le@gmail.com</td>
        <td>785214854</td>
        <td>USA</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Mark</td>
        <td>John</td>
        <td>john@gmailcom</td>
        <td>785214854</td>
        <td>Australia</td>
      </tr>
      
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>