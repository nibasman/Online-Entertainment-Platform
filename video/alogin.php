<?php
  
  include 'dbh.php';




    $username =  $_POST['mail'];
    $password =  md5($_POST['pass']);



    $sql = "SELECT * FROM admin WHERE username = '$username' AND passwd = '$password' ";

    $result = $conn->query($sql);
    session_start();

    if(!$row = $result->fetch_assoc()) {
      echo "incorrect username or password";
    }else {

        $_SESSION['id'] = $row['id'];
        header("Location: homepage.php");
      }

    

?>
