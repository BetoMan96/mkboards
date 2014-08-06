<?php
  
   $con = mysqli_connect("localhost","mkmatchmanager","abcdefrgtnmx","my_mkmatchmanager");

   $clan = mysqli_real_escape_string($con, $_GET['id']);
   $tag = mysqli_real_escape_string($con, $_GET['tag']);
   $link = mysqli_real_escape_string($con, $_GET['link']);
   $logo = mysqli_real_escape_string($con, $_GET['logoimg']);
  
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }
   
   mysqli_query($con, "INSERT INTO `my_mkmatchmanager`.`clans` (`name`, `points`, `win`, `tie`, `lose`, `link`, `tag`, `banner`) VALUES ('".$clan."', '1000', '0', '0', '0', '".$link."', '".$tag."', '".$logo."')");
   mysqli_query($con, "DELETE FROM `my_mkmatchmanager`.`regteam` WHERE `regteam`.`link` = \"".$link."\"");
   
   mysqli_close($con);
   
   header('Location: http://mkmatchmanager.altervista.org/warsviewer.php');
   
?>
