<?php

if (isset($_POST['submit'])) {

    include_once 'dbconnection.php';

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    //Error handlers
    if (empty($firstName) || empty($lastName) || empty($email) || empty($username) || empty($password)) {
        header("Location: ../index.php?fields=empty");
        exit();
    } else {
        //Input is valid
        if (!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName)) {
          header("Location: ../index.php?input=invalid");
          exit();
      } else {
          //Email is valid
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../index.php?email=invalid");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE u_username='$username'";
            $results = Database::getDb()->prepare("SELECT * FROM users WHERE u_username = ?");
            $results->execute([$firstName]);
            $resultsCheck = mysqli_num_rows($results);

            if ($resultCheck > 0) {
              header("Location: ../index.php?user=taken");
              exit();
          } else {
              //If Password is randomized
              //Insert user into database
              $newUser = Database::getDb()->prepare("INSERT INTO users (u_firstname, u_lastname, u_email, u_username, u_password) VALUES (?,?,?,?,?)");
              $newUser->execute([$firstName, $lastName, $email, $username, $password]);
              header("Location: ../index.php?success");
              exit();
            }
          }
        }
      }

} else {
    header("Location: ../index.php");
    exit();
}
