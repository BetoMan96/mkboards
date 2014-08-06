<?php

 $clan1 = $_POST['clan12'];
 $clan2 = $_POST['clan22'];
 $score1 = $_POST['htot'];
 $score2 = $_POST['otot'];
 $data = $_POST['dataoggi'];
 
 $gp1 = $_POST['gp1p'];
 $gp2 = $_POST['gp2p'];
 $gp3 = $_POST['gp3p'];
 
 $note = $_POST['noted'];
 $table = $_POST['tabellina'];
 
 if ( (strlen($gp1) != 0) && (strlen($gp2) != 0) && (strlen($gp3) != 0) ) {
 
  $con = mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");

  if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
  }
  
  //Save war in the databse
  mysqli_query($con, "INSERT INTO `my_mkmatchmanager`.`warviewer` (`clan1`, `score1`, `clan2`, `score2`, `date`, `gp1`, `gp2`, `gp3`) VALUES ('".$clan1."', '".$score1."', '".$clan2."', '".$score2."', '".$data."', '".$gp1."', '".$gp2."', '".$gp3."')");
  
  mysqli_close($con);
  
  //Save the notes
  $myFile = $clan1."".$score1."".$clan2."".$score2.".txt";
  $fh = fopen($myFile, 'w') or die("can't open file");
  fwrite($fh, $note);
  fclose($fh);
  
  $filteredData=substr($table, strpos($table, ",")+1);
  $unencodedData=base64_decode($filteredData);
  
  //Save the table
  file_put_contents($clan1."".$score1."".$clan2."".$score2.".png", $unencodedData);
  
  header('Location: index.php?status=true');
 
  } else {
 
  echo "<p><font color=\"red\"><b>Error</B></font>: You must type a correct link of the table. (Example of a correct link --> http://www.link.com). Please come back and fix the problem. The date must be typed too.</p>";
 
 }
 
?>