<?php
  
  $clan1 = $_GET['clan1'];
  $clan2 = $_GET['clan2'];
  $score1 = $_GET['score1'];
  $score2 = $_GET['score2'];
  $table = $_GET['table'];
  $pts1 = $_POST['pts1'];
  $pts2 = $_POST['pts2'];
  $data = $_GET['data'];
  
  $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
  
  //Update data and remove from the temp tables
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }
      
   mysqli_query($con, "INSERT INTO `my_mkmatchmanager`.`clanwars` (`clan1`, `score1`, `clan2`, `score2`, `table`, `date`) VALUES ('".$clan1."', '".$score1."', '".$clan2."', '".$score2."', '".$table."', '".$data."')");
   mysqli_query($con, "DELETE FROM `my_mkmatchmanager`.`warviewer` WHERE `warviewer`.`table` = \"".$table."\"");
   
   mysqli_query($con, "UPDATE `my_mkmatchmanager`.`clans` SET `points` = '".$pts1."' WHERE `clans`.`name` = '".$clan1."';");
   mysqli_query($con, "UPDATE `my_mkmatchmanager`.`clans` SET `points` = '".$pts2."' WHERE `clans`.`name` = '".$clan2."';");
   
   
   //Get clan 1 pts
   $result = mysqli_query($con,"SELECT * FROM clans WHERE `name` = '".$clan1."'");

   while($row = mysqli_fetch_array($result)) {
    $win1 = $row['win'];
    $tie1 = $row['tie'];
    $lose1 = $row['lose'];
   }
   
   //Get clan 2 pts
   $result2 = mysqli_query($con,"SELECT * FROM clans WHERE `name` = '".$clan2."'");

   while($row = mysqli_fetch_array($result2)) {
    $win2 = $row['win'];
    $tie2 = $row['tie'];
    $lose2 = $row['lose'];
   }
   
   //Individuals assignments
   if ($score1 > $score2) {
    mysqli_query($con, "UPDATE `my_mkmatchmanager`.`clans` SET `win` = '".($win1+1)."' WHERE `clans`.`name` = '".$clan1."'");
    mysqli_query($con, "UPDATE `my_mkmatchmanager`.`clans` SET `lose` = '".($lose2+1)."' WHERE `clans`.`name` = '".$clan2."'");
   } else {    
    if ($score1 < $score2) {
    mysqli_query($con, "UPDATE `my_mkmatchmanager`.`clans` SET `win` = '".($win2+1)."' WHERE `clans`.`name` = '".$clan2."'");
    mysqli_query($con, "UPDATE `my_mkmatchmanager`.`clans` SET `lose` = '".($lose1+1)."' WHERE `clans`.`name` = '".$clan1."'");
    } else {
     mysqli_query($con, "UPDATE `my_mkmatchmanager`.`clans` SET `tie` = '".($tie1+1)."' WHERE `clans`.`name` = '".$clan1."'");
     mysqli_query($con, "UPDATE `my_mkmatchmanager`.`clans` SET `tie` = '".($tie2+1)."' WHERE `clans`.`name` = '".$clan2."'");
    }
   }
   
   mysqli_close($con);
   
   header('Location: http://mkmatchmanager.altervista.org/warsviewer.php');
   
?>