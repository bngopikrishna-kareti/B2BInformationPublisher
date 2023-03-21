<!DOCTYPE html>
<html>
<head>
  <script>
    function login(){
      window.location = '/open'
    }
  </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("BACK.jpg");

  min-height: 0px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
 margin:40%;
justify-content: center;
align-items:center !important;
height: 100vh;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>


<h2>IDEA INVESTMENT</h2>
<div class="bg-img">
  <form action="/connect.php" class="container">
    <h1>Login</h1>
    <form method="post"action="connect.php">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<a href="#"style="color:dodgerblue">Forgot Password? </a>
    <button type="submit" class="btn" onclick="login()">Login</button>

     <p>Not a member? <a href="page 3.html"style="color:dodgerblue">Creat Account</a></p>
    </form>
  </form>
</div>



</body>
</html>