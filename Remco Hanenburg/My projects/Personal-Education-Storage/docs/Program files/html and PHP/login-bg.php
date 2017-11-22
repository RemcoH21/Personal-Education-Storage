<?php

session_start();

if (isset($_POST['submit'])) {

  include 'dbconnection.php';

  $email = $_POST['Email'];
  $password = $_POST['Password'];

  //Errors
  //Empty fields
  if (empty($email) || empty($password)) {
      header("Location: ../index.php?fields=empty");
      exit();
  } else {
    $sql = "SELECT * FROM users WHERE u_email='$email'";
    $results = Database::getDb()->prepare("SELECT * FROM users WHERE u_email = ?");
    $results->execute([$email]);
    $results = $results->fetch(PDO::FETCH_OBJ);
    if (empty($results)) {
        header("Location: ../index.php?login=resulterror");
        exit();
    } else {
            //Check if password is correct
            $checkPassword = password_verify($password, $results->u_password);
            if ($checkPassword == false) {
              header("Location: ../index.php?login=passworderror");
              exit();
          } elseif ($checkPassword == true) {
              //Logging in succesfully
              $_SESSION['userlogin'] = true;
              header("Location: ../homepage.php?login=success");
              exit();
        }
    }
  }
} else {
    header("Location: ../index.php?login=error");
    exit();
}
