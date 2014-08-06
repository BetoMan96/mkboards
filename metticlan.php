<?php
  
  $clan = $_GET['id'];
  $tag = $_GET['tag'];
  $link = $_GET['link'];
  $logo = $_GET['logoimg'];
  
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }
   
   mysqli_query($con, "INSERT INTO `my_mkmatchmanager`.`clans` (`name`, `points`, `win`, `tie`, `lose`, `link`, `tag`, `banner`) VALUES ('".$clan."', '1000', '0', '0', '0', '".$link."', '".$tag."', '".$logo."')");
   mysqli_query($con, "DELETE FROM `my_mkmatchmanager`.`regteam` WHERE `regteam`.`link` = \"".$link."\"");
   
   mysqli_close($con);
   
   header('Location: http://mkmatchmanager.altervista.org/warsviewer.php');
   
?>