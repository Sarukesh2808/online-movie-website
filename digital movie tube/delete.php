<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>amaFlix-delete</title>
   <link rel="stylesheet" href="user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body style="background-image: url(images/6.jpeg);">
   <header>
     
       <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background-image: url(images/10.jpeg);">
           <a href="homepage.php" class="navbar-brand"> <img src="images/lo.png" alt=""> </a>
           <span class="navbar-text" style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amaFlix&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

           <ul class="navbar-nav">
             <li class="nav-item"  style='color:yellow;background-color:red;font-size: 30px;font-weight: bold;border: 2px solid blue;'> <a href="homepage.php" class="nav-link"> Home </a> </li>&nbsp;&nbsp;
             <li class="nav-item"  style='color:yellow;background-color:red;font-size: 30px;font-weight: bold;border: 2px solid blue;'> <a href="logout.php" class="nav-link"> Logout</a> </li>

           </ul>

       </nav>

       <div class="container">

         <div class="jumbotron" style="background-image:url(images/ba.jpeg);">
           <h1 style="color:blueviolet;font-style: italic;"> Enter the ID of the Movie to delete...</h1>
           <p> <b></b> </p> <br>

           <form class="" action="deletem.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Movie id" style='background-color: black;color: red;font-size: 20px;margin-left:10px;margin-top:10px;padding:5px;' name="id" value=""><br>
            <div class="signupbutton">
               <input type="submit" class ="btn btn-success btn-lg" name="upload" value="Submit" >
             </div>
        </form>
      </div>
      </header>
 <br><br><br><br>
 <footer class="page-footer font-small blue">

   <div class="footer-copyright text-center py-3">ANY QUERY:
     <a href="">contact us...</a>
   </div>

 </footer>
   </body>
 </html>

