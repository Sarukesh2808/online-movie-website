<?php

include "dbh.php";      

$id=$_POST['id'];

$sql="DELETE from movies WHERE mid= $id"; 


$result=mysqli_query($conn,$sql);


if($result){
    header("location:homepage.php");
}

else{
    echo "error";
}

