<?php
  
  $name = $_GET['name'];
  $clan = $_GET['clan'];
  $nnid = $_GET['nnid'];
  $country = $_GET['country'];
  $link = $_GET['link'];
  
  
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }
   
   mysqli_query($con, "INSERT INTO `my_mkmatchmanager`.`players` (`name`, `clan`, `points`, `nnid`, `profile`, `country`) VALUES ('".$name."', '".$clan."', '0', '".$nnid."', '".$link."', '".$country."')");
   mysqli_query($con, "DELETE FROM `my_mkmatchmanager`.`regplayer` WHERE `regplayer`.`nnid` = \"".$nnid."\"");
   
   mysqli_close($con);
   
   header('Location: http://mkmatchmanager.altervista.org/warsviewer.php');
   
?>