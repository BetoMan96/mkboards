<?php
 $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
 mysqli_query($con,"TRUNCATE TABLE warviewer");  
 mysqli_close($con);
 
 $images = glob("/*.png");
 foreach($images as $image){
     unlink($image);
 }
 
 header('Location:http://mkmatchmanager.altervista.org/warsviewer.php');
?>