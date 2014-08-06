<?php

 $nome = $_POST['name'];
 $clan = $_POST['clan'];
 $regione = $_POST['country'];
 $profilo = $_POST['profile'];
 $nnid = $_POST['nnid'];
 
  $con = mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");

  if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
  }

  mysqli_query($con, "INSERT INTO `my_mkmatchmanager`.`regplayer` (`nome`, `clan`, `nnid`, `regione`, `profilo`) VALUES ('".$nome."', '".$clan."', '".$nnid."', '".$regione."', '".$profilo."');");
  
  mysqli_close($con);
  
  header('Location: index.php?regplayer=true');
  
?> 