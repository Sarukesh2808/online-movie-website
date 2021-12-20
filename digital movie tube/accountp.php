<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>amaFlix-pass</title>
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

      </header>

       <div class="container">
         <div class="jumbotron" style="background-image: url(images/ba.jpeg);">
        <?php
              include 'dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user1 WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);

      echo"  <form  action='update.php' method='POST'>

          <br><br><input type='text' class='form-control' placeholder='Enter full name'  style='background-color: black;color: red;font-size: 20px;margin-left:10px;margin-top:10px;padding:5px;' name='fname' value='".ucwords($result['name'])."'>
          <br>
          <input type='text' class='form-control' placeholder='Enter mobile number'  style='background-color: black;color: red;font-size: 20px;margin-left:10px;margin-top:10px;padding:5px;'name='phn' value='".$result['phone']."'>
          <br>
          <label><b  style='color:white;'>Date of Birth : </b></label>
          <input type='text' class='from-control' placeholder='Enter Date of Birth'  style='background-color: black;color: red;font-size: 20px;margin-left:10px;margin-top:10px;padding:5px;' name='dob' value='".$result['DOB']."'><br>

              <div class='signupbutton'>
                <br><br>
                <button type='submit' class='btn btn-success' name='sub' value='submit'>Update Details</button>

              </div>
              </form>


              <br><br>
              <label><b style='color:white;' >Email Id : ".$result['email']."</b></label>
              <br><br>
              <form class='' action='updatep.php' method='post'>
                <input type='password' class='form-control' placeholder='Enter old password'  style='background-color: black;color: red;font-size: 20px;margin-left:10px;margin-top:10px;padding:5px;' name='oldp'><br>
                <input type='password' class='form-control' placeholder='Enter new password'  style='background-color: black;color: red;font-size: 20px;margin-left:10px;margin-top:10px;padding:5px;'name='newp'><br>
                <button type='submit' class='btn btn-success ' name='subpass' value='submit'><center>Update Password</center></button><br>


              </form>


              ";
         ?>




      </div>

    </body>

  </html>
