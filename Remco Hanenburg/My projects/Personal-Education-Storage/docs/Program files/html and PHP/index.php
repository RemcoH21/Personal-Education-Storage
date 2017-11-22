<?php

session_start();

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Personal Education Storage - signup</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="content.css">
  </head>

  <body>

    <header class="main-header">
      <nav>
        <div>

            <div class="navbar-login">
              <form action="database/login-bg.php" method="POST">
                <input type="text" name="Email" placeholder="E-mail">
                <input type="password" name="Password" placeholder="Password">
                <button type="sumbit" name="submit">Login</button>
                <a href="index.php">Signup</a>
              </form>
            </div>

          <h1 class="h1-signup">Personal Education Storage</h1>
            <div>
                <form class="signup-menu" action="database/signup-bg.php" method="POST">
                  <h2 class="h2-signup">Signup</h2>
                  <input type="text" name="firstname" placeholder="Firstname">
                  <input type="text" name="lastname" placeholder="Lastname">
                  <input type="text" name="email" placeholder="E-mail">
                  <input type="text" name="username" placeholder="Username">
                  <input type="password" name="password" placeholder="Password">
                  <button type="submit" name="submit">Signup</button>
                </form>
            </div>
        </div>
      </nav>
    <header>

      </body>
      </html>
