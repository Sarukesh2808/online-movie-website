<?php
include 'dbh.php';


  $im = "SELECT * FROM movies" ;
  $records = mysqli_query($conn,$im);
  $count = mysqli_num_rows($records);


  $i=$count;
  $j=$count-5;
  $newim = "SELECT * FROM movies WHERE mid BETWEEN '$j' AND '$i'" ;
  $newrecords = mysqli_query($conn,$newim);
    while($fetchr = mysqli_fetch_assoc($newrecords)){

      echo"<form action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$fetchr['imgpath']."' height='300' width='400' style='border-style:solid;border-color:white;margin-top: 30px;margin-left:50px;margin-right:20px;' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:400px;padding-bottom:15px;font-size:30px;margin-bottom:30px;margin-left:50px;margin-right:20px;border-style:solid;border-color:white;border-width:thick;color:blue;background-color:yellow;' value='".ucwords($fetchr['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";


    }

    ?>
