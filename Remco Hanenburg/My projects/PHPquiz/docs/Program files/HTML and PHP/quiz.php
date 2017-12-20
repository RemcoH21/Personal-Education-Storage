<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quiz - questions</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <?php
      require_once ("CSV-class.php");
      // quiz.php?q=1
      // quiz.php

      if (isset($_GET["q"])) {
          $question_id = $_GET["q"];
      }
      else {
          $question_id = 1;
      }
      if ($question_id == 0) {
        echo "Something went very wrong";
      }
      else if ($question_id >= 13) {
        echo "Congratulations! You've completed the quiz!";
      }
      else {
        //This needs to be database connection -->
        $csv = new CSV("list.csv");

        $question = $csv->get_cell($question_id, 1);
        $id_yes = $csv->get_cell($question_id, 2);
        $id_no = $csv->get_cell($question_id, 3);
        $id_dunno = $csv->get_cell($question_id, 4);

        echo "<div class=\"title\">";
        echo "<h1>Sport Quiz</h1>";
        echo "<hr>";
        echo "</div>";
        echo "<h1 class=>$question</h1>";
        echo "<a href=\"quiz.php?q=$id_yes\">Yes</a><br>";
        echo "<a href=\"quiz.php?q=$id_no\">No</a><br>";
        echo "<a href=\"quiz.php?q=$id_dunno\">I don't know<br>";
      }
     ?>
  </body>
</html>
