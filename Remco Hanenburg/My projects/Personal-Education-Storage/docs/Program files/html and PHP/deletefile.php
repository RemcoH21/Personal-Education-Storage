<?php
$fileNames = $_POST['filenames'];
$removeSpaces = str_replace(" ", "", $fileNames);
$allFileNames = explode(",", $removeSpaces);
$countAllNames = count($allFileNames);

/*count() counts all the pieces of data for the for loop*/
/*explode() seperates (maakt apart) all files*/

for ($i=0; $i < $countAllNames; $i++) {
    if (file_exists("uploads/".$allFileNames[$i]) == false) {
        header("Location: homepage.php?errordelete");
        exit();
    }
}

for ($i=0; $i < $countAllNames; $i++) {
    $path = "uploads/".$allFileNames[$i];
    if (!unlink($path)) {
        echo "There was an Error deleting the file";
        exit();
      }
}

header("Location: homepage.php?deletesuccess");
