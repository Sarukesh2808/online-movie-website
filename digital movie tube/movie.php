<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM movies WHERE name = '$title'" ;

  $records = mysqli_query($conn,$im);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>".$title."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
    echo"</head>";
    echo"<body style='background-image:url(images/6.jpeg);'>";
         echo"<nav class='navbar navbar-expand-md navbar-dark bg-dark' style='background-image: url(images/10.jpeg);' >
            <a href='homepage.php' class='navbar-brand'> <img src='images/lo.png'  height='100' width='120'alt=''> </a>
            <span class='navbar-text' style='color:red;font-size:30px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amaFlix&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";

            echo"<ul class='navbar-nav'>";
              
          
              echo"<li class='nav-item'> <a href='account.php' class='nav-link' style='color:yellow;background-color:darkred;font-size: 30px;font-weight: bold;border: 2px solid blue;'>Account</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                  <li class='nav-item'> <a href='logout.php' class='nav-link' style='color:yellow;background-color:darkred;font-size: 30px;font-weight: bold;border: 2px solid blue;'>Logout</a> </li>
                  </ul>
                  </nav>";
                  echo "<br><br>";

        echo"<div class='jumbotron-fluid' style='background-color:black;'>";
        echo"<div class='container'>";
        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['name'];
            $person = $_SESSION['id'];
            $movieid = $result['mid'];
            $current = $result['viewers'];
            $newcount = $current + 1;
            $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE user1 SET mid = '$movieid'";
            $updatecount = mysqli_query($conn,$newsql);
            $updatecount = mysqli_query($conn,$nsql);
            
           
            echo"<h1 style='display: inline;text-align: center;font-size: 40px;font-weight:bold;color:blue;margin-right:20px;'>&nbsp;&nbsp;".ucwords($result['name'])."</h1>";
            
            echo"<br>";
                        
            echo"<br><div class='embed-responsive embed-responsive-16by9' >";
            echo" <iframe class='embed-responsive-item'  src='https://www.youtube.com/embed/".ucwords($result['videopath'])."'  frameborder='0'  allowfullscreen></iframe>";
            echo"</div>";
             
    
         
          echo "<br><br><h5 style='display: inline;ont-size: 40px;font-weight:bold;'><br>movie name : </h5><h1 style='display: inline;ont-size: 30px;font-weight:bold;'>".ucwords($result['name'])."</h1>";
          echo"<br><h5 style='display: inline;ont-size: 40px;font-weight:bold;' >genre : </h5><h4 style='display: inline;ont-size: 30px;font-weight:bold;'>".ucwords($result['genre'])."</h4>";
          echo"<br><h5 style='display: inline;ont-size: 40px;font-weight:bold;' >release year : </h5><h4 style='display: inline;ont-size: 30px;font-weight:bold;'>".$result['rdate']."</h4>";
          echo"<br><h5 style='display: inline;ont-size: 40px;font-weight:bold;' >description : </h5><h4 style='display: inline;ont-size: 30px;font-weight:bold;'>".ucfirst($result['decription'])."</h4>";
          echo"<br><h5 style='display: inline;ont-size: 40px;font-weight:bold;' >runtime : </h5><h4 style='display: inline;ont-size: 30px;font-weight:bold;'>".$result['runtime']." mins </h4>";
          echo"<br><h5 style='display: inline;ont-size: 40px;font-weight:bold;' >views : </h5><h4 style='display: inline;ont-size: 30px;font-weight:bold;'>".$result['viewers']."</h4><br><br>";
           
        
         
         
          
          
             
          
          
           
         }
        

        
       echo"</div>";

        echo"</div>";
        
        
        

    echo"</body>";


  echo"</html>";


}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="background-color: red;">

            
  <div class='col' style="text-align: center;">
                    <form action='search.php' method='POST'>
                      <select  name='option' style='padding:5px;'>
                        <option selected>Search By</option>
                        <option value='name'>Name</option>
                        <option value='genre'>Genre</option>
                        <option value='rdate'>Release year</option>
                      </select>
                      <input type='text' placeholder='type here...' style='background-color: black;color: red;font-size: 20px;margin-left:10px;margin-top:10px;padding:5px;' name='textoption'>

                      <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:100px;margin-left:20px;margin-right:20px;margin-top:5px;color: navy;background-color: yellow;color: blue;' value='Search'/></h4>
                    </form>
                 </div>
  <div class="jumbotron" style="background-image: url(images/ba.jpeg);">
        
        <h2 style="color:blue;background-color: yellow;"><center>  -----All movies-----</center></h2>
        <div class="row">
          <?php
            include 'fetcher.php';
            ?>
          </div>  

      </div>
<footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3" style="color:white;">ANY QUERY:
      <a href="">contact us...</a>
    </div>

  </footer>
  </body>
</html>


