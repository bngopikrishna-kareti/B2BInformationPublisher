<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserLogin</title>
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

  <div class="container">
    <div class="row">
      <div class="col-6">
          <img src={{asset('images/admin_login_logo.jpg')}} class="img-fluid" alt="Admin access ONLY!"><br><br>
   
        <br>
        <p class="text-primary">"We look for the bigger picture to ensure all <br>your financial needs and aspirations are fully<br> taken on board and acted upon"</p>
        <br>
        <br>
        <p class="text-success">DISCOVER OUR INNOVATION COMMUNITY</p>
        <p class="font-monospace">Trusted by clients worldwide and across<br> industries and organizations who aim to drive <br>results through collaborative innovation.</p>
      </div>
      <br><br>
      <div class="col-6"><br>
        <div class="card"><br>
          <div class="card-header"><br>
            <h1 class="text-center">Login Page</h1>
          </div>
          <div class="card-body">
            <form action="login.php" method="post">
            <form class="row g-3" novalidate>
              <div class="col-md-12">
                <label for="validationCustom01" class="form-label"
                  >Login ID</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="loginID" name="loginID"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-12">
                <label for="validationCustom05" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="password" name="password"
                  required
                />
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
              <br>
              <div class="col-12">
                <button class="btn btn-primary w-100" type="button" onclick="homepage()">
                  Submit
                </button>
              </div>
                <br>
                <button type="button" class="btn btn-outline-primary" onclick="admin_password_reset()">Forgot Password</button>
                <button type="button" class="btn btn-light" onclick="register_user()">New Register</button>
                
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>