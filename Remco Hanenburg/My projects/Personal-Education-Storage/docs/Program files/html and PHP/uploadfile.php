[]<?php
if (isset($_POST['submit'])) {
  $myfiles = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileLocName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $uploadfile = $uploaddir . basename($_FILES['file']['name'])

  $fileExt = explode('.', $fileName);
  $fileActExt = strtolower(end($fileExt));

  $allow = array('jpg', 'jpeg', 'png', 'pdf', 'txt', 'log', 'doc', 'cpp');

  if (in_array($fileActExt, $allow)) {
      if ($fileError === 0) {
          //For later in db
          //Use function: upload_max_filesize?
          //<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
          if ($fileSize < 10000000) {
              $fileNewName = uniqid('', true).".".$fileActExt;
              $fileDest = /*I didnt put the destination in it just for safety where I need to work on:'var/www/uploads'*/''.$fileNewName;
              move_uploaded_file($fileLocName, $fileDest);
              header("Location: homepage.php?uploadsuccess");
          }  else {
              echo "Possible file upload attack!";
          }
      }  else {
          echo "Possible file upload attack!";
      }
  }   else {
        echo "Possible file upload attack!";
  }
}




















 ?>
