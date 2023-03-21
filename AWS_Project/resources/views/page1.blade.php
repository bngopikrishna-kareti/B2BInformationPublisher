<!DOCTYPE html>
<html lang="en">

<head>
  <script>
    function account_page(){
      window.location = "/page2";
    }
  </script>
<picture>
  <source srcset="..." type="image/svg+xml">
  <img src="II.jpg" class="img-fluid img-thumbnail" alt="...">
</picture>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mr. Camel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    <img src="II.jpg" class="img-fluid" alt="Idea Investments">

    body {
      margin: 0;
      box-sizing: border-box;
    }

    .container {
      line-height: 150%;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      background-color: #e9e9e9;
    }

    .header h1 {
      color:black;
      font-size: 30px;
      font-family: 'Pacifico', cursive;
    }

    .header .social a {
      padding: 0 5px;
      color:blue;
    }

    .left {
      float: left;
      width: 180px;
      margin: 0;
      padding: 1em;
    }

    .content {
      margin-left: 190px;
      border-left: 1px solid #d4d4d4;
      padding: 1em;
      overflow: hidden;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }

    li a.active {
      background-color: #84e4e2;
      color: purple;
    }

    li a:hover:not(.active) {
      background-color: #29292a;
      color: white;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin: 30px 0;
    }

    td,
    th {
      border: 1px solid #dddddd;
      padding: 8px;
    }

    tr:nth-child(1) {
      background-color: #84e4e2;
      color: white;
    }

    tr td i.fas {
      display: block;
      font-size: 35px;
      text-align: center;
    }

    .footer {
      padding: 55px 20px;
      background-color: #2e3550;
      color: white;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <header class="header">
      <h1>Idea Investment</h1>
      <div class="social">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkdin"></i></a>
      </div>
    </header>
    <aside class="left">
      <img src="./assets/html/mr-camel.jpg" width="160px" />
      <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><button onclick="account_page()">Account</button></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
      </ul>
      <br><br>
      <p>"We look at the bigger picture to ensure all your financial needs and aspirations are fully taken on board and acted upon."</p>
    </aside>
    <main class="content">
<h2 style="color:blue">About Us</h2>
      <p>"We invest our ideas here to help you in investing your money for profits safely."</p>
      <h2 style="color:green">Discover our innovation community</h2>
      <p>Trusted by clients worldwide and across industries and organizations who aim to drive results through collaborative innovation..</p>
      <hr><br>
      
      <form>
        <label>Email: <input type="text" name="email"></label><br>
        <label> Mobile: <input type="text" name="mobile"> </label><br>
        <textarea name="comments" rows="4">Enter your message</textarea><br>
        <input type="submit" value="Submit" /><br>

      </form>
    </main>
   
  </div>
</body>

</html>