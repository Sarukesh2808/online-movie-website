<?php
session_start();

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Eric Mahoney - Social Network</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
<?php
              include 'dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user1 WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);
              $name=$result['name'];
              $email=$result['email'];
              $comment=$_POST['comment'];
              $query="INSERT INTO comment(name, email, comment) VALUES('$name','$email','$comment')";
             
        
       if ($result) {
        //
    } else {
        echo "registered successfuly";
    }
     echo '<script>alert("User added! Redirecting back to login page");
    window.location.href="movie.php"</script>';
     
       
   
    ?>
    
    </body>
    </html>