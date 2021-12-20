<?php
include 'dbh.php';


  $im = "SELECT * FROM movies ORDER BY name ASC" ;
  $records = mysqli_query($conn,$im);

  start:
  $i=0; 

  echo"<div class='row'>";
    while($result = mysqli_fetch_assoc($records)){
      echo"<form action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$result['imgpath']."' height='300' width='430' style='border-style:solid;border-color:white;margin-top: 30px;;margin-left:30px;margin-right:20px;' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;font-family:garomond,serif;font-size:30px;width:430px;padding-bottom:15px;margin-bottom:30px;margin-left:30px;margin-right:20px;border-style:solid;border-color:white;border-width:thick;color:blue;background-color:yellow' value='".ucwords($result['name'])."'/>";
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
    ?>
