<?php
  include 'dbh.php';




    $username =  $_POST['mail'];
    $password =  md5($_POST['pass']);



    $sql = "SELECT * FROM user1 WHERE username = '$username' AND passwd = '$password' ";

    $result = $conn->query($sql);
    session_start();

    if(!$row = $result->fetch_assoc()) {
      echo "Incorrect Email or password. Please Try again.";
         }else {

        $_SESSION['id'] = $row['id'];
        header("Location: homepagep.php");
      }

    

?>
