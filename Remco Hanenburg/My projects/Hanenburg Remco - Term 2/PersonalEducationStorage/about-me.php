<?php

include_once 'database/dbconnection.php';
session_start();

include_once 'database/dbconnection.php';
if(isset($_SESSION))
{
  if($_SESSION['userlogin'] == false)
  {
    header('Location: http://localhost/PersonalEducationStorage/index.php');
    exit();
  }
} else
{
  header('Location: http://localhost/PersonalEducationStorage/index.php');
  exit();
}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Personal Education Storage - about me</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="aboutme.css">
     <link rel="stylesheet" type="text/css" href="content.css">
   </head>

   <body>

     <header class="main-header">
       <nav>
         <div>
             <ul class="main-navbar">
               <li><a href="homepage.php">Homepage</a></li>
               <li><a href="documents.php">Documents</a></li>
               <li><a href="tutorials.php">Tutorials</a></li>
               <li><a href="about-me.php">About me</a></li>
             </ul>

             <div class="navbar-login">
               <?php
                  if (isset($_SESSION['u_id'])) {
                      echo '<form action="database/login-bg.php" method="POST">
                          <button type="type" name="submit">Logout</button>
                        </form>';
                  }
                ?>
                <form action="database/logout-bg.php" method="POST">
                    <button type="type" name="submit">Logout</button>
                </form>
             </div>

             <div class="h1-main">
               <h1>About me</h1>
             </div>
         </div>
       </nav>
     <header>
       <div class="wrapper">
         <div id="main-content">
           <form action="search.php" method="POST">
             <button type="submit" name="search-btn">Search</button>
             <input class="input-about-me" type="text" name="searchbar" placeholder="Search">
           </form>

             <div class="border-about-me">
               <?php
               //Need to type the whole string of title, text, author or date. Working on it.
               if(isset($_POST['searchbar'])) {
               $search = $_POST['searchbar'];
               $searchResults = Database::getDb()->prepare("SELECT * FROM search WHERE s_title LIKE '%search%' OR s_text LIKE '%search%'
                 OR s_author  LIKE '%search%' OR s_date LIKE '%search%'");
               $searchResults->execute([$search, $search, $search, $search]);
               $searchResults = $searchResults->fetchAll(PDO::FETCH_OBJ);
               $queryResults = array_count_values($searchResults);

                if ($queryResults > 0 ) {
                  foreach($searchResults as $searchAcc) {
                      echo "<div class='box-about-me'>
                      <h4>".$searchAcc->s_title."</h4>
                      <p>".$searchAcc->s_text."</p>
                      <p>".$searchAcc->s_author."</p>
                      <p>".$searchAcc->s_date."</p>
                    </div></a>";
                  }
                }
              }
                ?>

             </div>
         </div>
       </div>

      <div id="sidebar-btn" onclick="toggleMenu()"></div>
        <aside id="sidebar-menu">

          <h3>My links:</h3>
          <ul class="main-ul">
            <li><a href="#">Friese Poort<i class="arrow-side"></i></a>
              <ul class="second-ul">
                <li><a href="https://elo.rocfriesepoort.nl/#-235">ELO login</a></li>
                <li><a href="https://www.rocfriesepoort.nl/">Friese Poort site</a></li>
                <li><a href="https://outlook.office.com/owa/">Friese Poort mail</a></li>
              </ul>
            <li><a href="#">W3schools<i class="arrow-side"></i></a>
              <ul class="second-ul">
                <li><a href="https://www.w3schools.com/html/default.asp">HTML</a></li>
                <li><a href="https://www.w3schools.com/css/default.asp">CSS</a></li>
                <li><a href="https://www.w3schools.com/php/default.asp">PHP</a></li>
                <li><a href="https://www.w3schools.com/js/default.asp">Javascript</a></li>
                <li><a href="https://www.w3schools.com/sql/default.asp">SQL</a></li>
                <li><a href="https://www.w3schools.com/bootstrap/default.asp">Bootstrap</a></li>
              </ul>
            </li>
            <li><a href="https://github.com/">GitHub</a></li>
            <li><a href="#">Other<i class="arrow-side"></i></a>
              <ul class="second-ul">
                <li><a href="http://www.google.com">Google</a></li>
                <li><a href="https://outlook.live.com/owa/">Hotmail</a></li>
                <li><a href="https://www.youtube.com/">Youtube</a></li>
              </ul>
          </ul>


          <hr class="aside-hr">

            <h3>Upload-delete menu:</h3>
              <div class="upload-delete-menu">
                <form class="upload-menu" action="uploadfile.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <button type="submit" name="submit">UPLOAD</button>
                </form>
                <form class ="delete-menu" action="deletefile.php" method='POST'>
                    <input type="text" name="filenames" placeholder="Delete files: ">
                    <button type="submit" name="submit">DELETE</button>
                </form>
                <hr class="aside-hr">
              </div>
            </aside>


        <!--JavaScript-->
        <script>
            var toggleStatus = 1;
            function toggleMenu() {
                if (toggleStatus == 1) {
                    document.getElementById("sidebar-menu").style.left = "-310px";
                    document.getElementById("sidebar-btn").style.left = "-310px"
                    toggleStatus = 0;
                }  else if (toggleStatus == 0) {
                    document.getElementById("sidebar-menu").style.left = "0px";
                    document.getElementById("sidebar-btn").style.left = "0px";
                    toggleStatus = 1;
                }
            }

        </script>

<?php

include_once 'footer.php';

 ?>
