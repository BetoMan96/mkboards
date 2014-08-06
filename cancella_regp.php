<?php
 $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
 mysqli_query($con,"TRUNCATE TABLE regplayer");  
 mysqli_close($con);
 header('Location:http://mkmatchmanager.altervista.org/warsviewer.php');
?>