<?php

 $nome = $_POST['name'];
 $link = $_POST['link'];
 $tag = $_POST['tag'];
 $logo = $_POST['logo'];
 
  $con = mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");

  if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
  }

  mysqli_query($con, "INSERT INTO `my_mkmatchmanager`.`regteam` (`name`, `link`, `tag`, `logo`) VALUES ('".$nome."', '".$link."', '".$tag."', '".$logo."')");
  
  mysqli_close($con);
  
  header('Location: index.php?regteam=true');
  
?> 