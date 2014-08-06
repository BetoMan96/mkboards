<?php

 $username = $_POST['username'];
 $password = $_POST['passw'];
 
 if ( ($username == "matchmanager48") && ($password == "guixddq43f") ) {
  header('Location: http://mkmatchmanager.altervista.org/warsviewer.php');
 } else {
  header('Location: /');
 }

?>