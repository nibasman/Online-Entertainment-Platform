
<?php
session_start();

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NeonFlix-Login</title>
    <link rel="stylesheet" href="user-login.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">NeonFlix</span>
        </nav>
     
        <div class="container">

          <div class="jumbotron">
            <h1>Admin</h1> <br>
            <form class="" action="alogin.php" method="POST"> <br><br>
              <input type="email" class="form-control" placeholder="Usename/ Email Address" name="mail" value="">
              <br>
              <input type="password" class="form-control" placeholder="Password" name="pass" value="">
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-success btn-lg" name="login">Login</button>

              </div>
              </form>

              </div>

          </div>
        </div>

  </header>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="">nibasman@gmail.com</a>
    </div>

  </footer>
  </body>

</html>
