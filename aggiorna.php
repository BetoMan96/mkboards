<?php

  $name = $_POST['pname'];
  $points = $_POST['pts'];
  
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }
   
   mysqli_query($con, "UPDATE `my_mkmatchmanager`.`players` SET `points` = '".$points."' WHERE `players`.`name` = '".$name."';");
   
   mysqli_close($con);
   
   header('Location: http://mkmatchmanager.altervista.org/warsviewer_user.php');

?>