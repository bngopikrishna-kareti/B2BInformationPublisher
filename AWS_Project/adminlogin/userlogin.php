<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserLogin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<script>
    function isvalid(){
        var user = document.form.user.value;
        var pass = document.form.pass.value;
        if(user.length=="" && pass.length==""){
            alert("username or password fields are empty");
            return false

        }
        else
        { if(user.length==""){
            alert("username field is empty");
            return false
        }
        }
    }
    </script>
     <div class="container">
    <div class="row">
      <div class="col-6">
          <img src="logo.jpg" class="img-fluid" alt="Admin access ONLY!"><br><br>
   
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
            <label>Username: </label>
            <input type="text" id="user" name="user"><br><br>
            <label>password</label>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="submit" id="btn" value="login" name="submit"/>
            <a href="/adminuserreg/index.php"><button type="button" class="btn btn-warning btn-sm">Register</button></a>

            
              </div>
                <br>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
