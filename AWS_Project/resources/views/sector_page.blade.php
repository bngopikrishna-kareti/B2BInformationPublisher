<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
      function home_page(){
        window.location = '/homepage';
      }
      function available_ideas(){
        console.log("inside_available_ideas");
        window.location = '/available_ideas';
      }

      function Add_rms(){
        window.location = '/AddIdea';
      }

      function Remove_idea(){
        window.location = '/Remove_idea';
      }
      </script>
</head>
<body>
   <h1> <div class="shadow-sm p-3 mb-5 bg-body rounded">Idea Investments</div></h1>
<img src="logo.jpg" class="rounded float-end" alt="...">
<br>
<p class="font-monospace">Welcome Back Admin!</p>
<div class="btn-group">
    <button type="button" class="btn btn-warning" id="liveToastBtn" onclick="home_page()">Home</button></div>
    <button type="button" class="btn btn-warning">Company View</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li onclick="available_ideas()" class="dropdown-item">View Ideas</li>
      <li onclick="Add_rms()" class="dropdown-item">Add Ideas</li>
      <li><a class="dropdown-item" href="#">Edit Existing Idea</a></li>
      <li onclick="Remove_idea()" class="dropdown-item">Kill Idea</a></li>
      <li><hr class="dropdown-divider"></li>
    </ul>
  </div>
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
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-warning" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Account</a>
  <a href="userlogin.html"><button type="button" class="btn btn-danger" id="liveToastBtn">Logout</button></a>
  <br>
  
  <nav id="navbar-example" class="navbar navbar-light bg-light flex-column align-items-stretch p-3">
    <a class="navbar-brand" href="#">Please Navigate to Ideas</a>
    <nav class="nav nav-pills flex-column">
      <a class="nav-link" href="#item-1"> Transport</a>
      <a class="nav-link" href="#item-2">Banking</a>
      <a class="nav-link" href="#item-3">E-Commerce</a>
      <a class="nav-link" href="#item-4">Telecom</a>
      <a class="nav-link" href="#item-5">Marketing</a>
      <a class="nav-link" href="#item-6">Pharma</a>
      <a class="nav-link" href="#item-7">Product</a>

    </nav>
  </nav>
  
  <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
    <h4 id="item-1">Transport</h4>
    <p>E-Kart<br>
        ShipCo Goods Service<br>
        AGS Movers<br>
    </p>
        <h4 id="item-2">Banking</h4>
    <p> SBI <br>
        Lloyds<br>
        KVB<br>
        HDFC<br>
    </p>
    <h4 id="item-3">E-Commerce</h4>
    <p>Flipkart<br>
        Amazon<br>
        Nykaa<br>
        Alibaba<br>
        H&M<br>
        </p>
    <h4 id="item-4">Telecom</h4>
    <p>Lebara<br>
        Airtel<br>
        Vodafone<br>
        Uninor<br>
        BSNL<br></p>
    <h4 id="item-5">Marketing</h4>
    <p>Mudra Ad Agency<br>
    Bark<br>
Superside<br>
Sponsered<br></p>
    <h4 id="item-6">Pharma</h4>
    <p>Sieko Biotics<br>
    AGC BIO<br>
CPHI<br>
ASTX<br>
Apollo.co<br>
</p>
    <h4 id="item-7">Product</h4>
    <p>IBM<br>
    TCS<br>
Walmart<br>
Samsung<br>
Alphabet<br>
Apple<br>
</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>