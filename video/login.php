<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MyFlix</title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">MyFlix</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="#A" class="nav-link"> Services</a> </li>
              <li class="nav-item"> <a href="user-login.php" class="nav-link"> SignIn</a> </li>
              <li class="nav-item"><a href="admin/index.php" class="nav-link">Admin</a></li>
            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron">
            <h1>Watch Anywhere, <br> Watch Anytime... </h1> <br>
            <a href="signup.php" type="button" class="btn btn-danger btn-block">Sign Up Now</a>
          </div>
        </div>
      </div>

      </header>



    <section class="features">
        <a href="#" name="A"></a>
        <h2>Our Services</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="arrange"><img src="images/mob.png" alt=""> <br> At MyFlix, we want to entertain the world. Whatever your taste, and no matter where you live, we give you access to best-in-class TV shows, movies and documentaries. Our members control what they want to watch, when they want it, with no ads, in one simple subscription. We’re streaming in more than 30 languages and 190 countries, because great stories can come from anywhere and be loved everywhere. We are the world’s biggest fans of entertainment, and we’re always looking to help you find your next favorite story.
              </p>
            </div><div class="col-md-4">
              <p class="arrange"><img src="images/mess.png" alt=""> <br> What was supposed to be a peaceful protest turned into a violent clash with the police. What followed was one of the most notorious trials in history.
              </p>
            </div>
              <div class="col-md-4">

                <p class="arrange">
                  <img src="images/desktop.jpg"> <br>   At MyFlix, we want to entertain the world. Whatever your taste, and no matter where you live, we give you access to best-in-class TV shows, movies and documentaries. Our members control what they want to watch, when they want it, with no ads, in one simple subscription. We’re streaming in more than 30 languages and 190 countries, because great stories can come from anywhere and be loved everywhere. We are the world’s biggest fans of entertainment, and we’re always looking to help you find your next favorite story.
                </p>
              </div>

            </div>

          </div>
          <h3></h3>

    </section>
    <footer class="page-footer font-small blue">

      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="index.php">MyFlix</a>
      </div>

    </footer>
  </body>
</html>
