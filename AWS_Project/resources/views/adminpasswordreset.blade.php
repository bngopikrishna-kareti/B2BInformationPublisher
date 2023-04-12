<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
      function user_login(){
        window.location = '/';
      }
      </script>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-6">
          <img src={{asset('images/admin_login_logo.jpg')}} class="img-fluid" alt="Admin access ONLY!"><br><br>
   
      <div class="col-6"><br>
        <div class="card"><br>
          <div class="card-header"><br>
            <h1 class="text-center">Reset Password</h1>
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
                  >New Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="password" name="New password"
                  required
                />
                <div class="col-md-12">
                    <label for="validationCustom05" class="form-label"
                      > Confirm Password</label
                      >
                <input
                  type="password"
                  class="form-control"
                  id="password" name="Confirm password"
                  required
                />
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
              <br>
              <div class="col-12">
                <button class="btn btn-primary w-100" type="button" onclick="user_login()">
                  Submit
                </button>
              </div>
                <br>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>