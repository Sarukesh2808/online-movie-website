<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>amaFlix-Homepage</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark" style='background-image: url(images/10.jpeg);' >
            <a href="#" class="navbar-brand"> <img src="images/lo.png" alt=""> </a>
            <span class="navbar-text" style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amaFlix&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link' style='color:yellow;background-color:darkred;font-size: 15px;font-weight: bold;border: 2px solid blue;'>Add&nbsp;movie</a> </li>";
                  echo "<li class='nav-item'> <a href='delete.php' class='nav-link' style='color:yellow;background-color:darkred;font-size: 15px;font-weight: bold;border: 2px solid blue;'>delete&nbsp;movie</a> </li>";
                }
              }
              echo"<li class='nav-item'> <a href='account.php' class='nav-link' style='color:yellow;background-color:darkred;font-size: 15px;font-weight: bold;border: 2px solid blue;'>Account</a> </li>

                  <li class='nav-item'> <a href='logout.php' class='nav-link' style='color:yellow;background-color:darkred;font-size: 15px;font-weight: bold;border: 2px solid blue;'>Logout</a> </li>
                  </ul>
                  </nav>
                  <div class='container-fluid'>
                  <br><br><br>";
                  include 'dbh.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM user1 WHERE id = '$id' ";
                  $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($conn,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);

              echo"<h1 style='color:black;position:sticky;'>WELCOME </h1><b style = 'color: black;font-size: 25px'><i> ".ucwords($rel['name'])." !</i></b>
                  </div>
                  </header>
                  <section>


                <div class='jumbotron' style='margin-top:15px;padding-top:30px;padding-bottom:30px;'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie.php' method='POST'>
                    <h4 style='color:blue;font-size:30px;'>Recent :
                    <input type='submit' name='submit' class='btn btn-success' style='display:inline;font-size:20px;font-weight:bold;width:300px;margin-left:20px;margin-right:20px;color: navy;background-color: yellow;color: blue;' value='".ucwords($rel2['name'])."'/></h4>
                    </form>
                  </div>
                  <div class='col' style='text-align: center;'>
                    <form action='search.php' method='POST'>
                      <select  name='option' style='color:black;background-color:orangered;padding:5px;'>
                        <option selected >Search By</option>
                        <option value='name'>Name</option>
                        <option value='genre'>Genre</option>
                        <option value='rdate'>Release year</option>
                      </select>
                      <input type='text' style='background-color:black; black;color: red;font-size: 20px;margin-left:10px;padding:5px;' placeholder='type here...'  name='textoption'>

                      <input type='submit' name='submit' class='btn btn-success' style='display:inline;font-weight:bold;width:100px;margin-left:20px;margin-right:20px;color: navy;background-color: yellow;color: blue;' value='Search'/></h4>
                    </form>
                 </div>
                </div>
                </div>";
                  ?>
      <div class="jumbotron">
        <h2 style="color:blue;background-color: yellow;"><center>  -----result-----</center></h2>

            <?php
            include 'searchback.php';
            ?>

      </div>


  </section>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">ANY QUERY:
      <a href="">contat us...</a>
    </div>

  </footer>
  </body>
</html>
