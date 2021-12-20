<?php
include 'dbh.php';
if(isset($_POST['submit'])){

    $option = $_POST['option'];
    $text =  strtolower($_POST['textoption']);
    $person = $_SESSION['id'];

    $found = "SELECT * FROM movies WHERE $option LIKE '$text%'";
    $display = mysqli_query($conn,$found);

  start:
  $i=0;

  echo"<div class='row'>";
    while($final = mysqli_fetch_assoc($display)){

      echo"<form action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$final['imgpath']."' height='270' width='380' style='border-style:solid;border-color:white;margin-top: 30px;;margin-left:30px;margin-right:20px;' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;font-family:garomond,serif;font-size:30px;width:380px;padding-bottom:15px;margin-bottom:30px;margin-left:30px;margin-right:20px;border-style:solid;border-color:white;border-width:thick;color:blue;background-color:yellow' value='".ucwords($final['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";

      if ($i==6) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";

  }


 ?>
