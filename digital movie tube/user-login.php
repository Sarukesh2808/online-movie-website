
<?php
session_start();

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>amaFlix-Login</title>
    <link rel="stylesheet" href="user-login.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body  style="background-image:url(images/6.jpeg">
    <header>
   
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background-image:url(images/10.jpeg)">
            <a href="login.php" class="navbar-brand"> <img src="images/lo.png" alt=""> </a>
            <span class="navbar-text"  style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amaFlix&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="test.php" class="nav-link" style="color:yellow;background-color:darkred;font-size: 30px;font-weight: bold;border: 2px solid blue;"> SignUp</a> </li>

            </ul>

        </nav>

        <div class="container">

          <div class="jumbotron" style="background-image:url(images/ba.jpeg);">
            <h1 style="color:blueviolet;font-style: italic;">Login to your account</h1> <br>
            <form class="" action="Plogin.php" method="POST"> <br><br>
              <input type="email" class="form-control"style="background-color: black;color: red;font-size: 20px;" placeholder="Usename/ Email Address" name="mail" value="">
              <br>
              <input type="password" class="form-control" placeholder="Password" style="background-color: black;color: red;font-size: 20px;"name="pass" value="">
              <br><br>

              <div class="loginbutton" style="'display:inline;width:100px;margin-left:20px;margin-right:20px;margin-top:5px;background-color: yellow;color: blue;">
                <button type="submit" class="btn btn-success btn-lg" name="login" ><h1 >Login</h1></button>

              </div>
              </form>

              </div>


          </div>
        </div>

  </header>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">ANY QUERY:
      <a href="">contact us...</a>
    </div>

  </footer>
  </body>

</html>
