<html>
 
 <head>
  
  <title>MK8 Match Manager</title>
  
  <link rel="stylesheet" type="text/css" href="http://mkmatchmanager.altervista.org/styles/menu.css">
  
  <style>
   html {
    margin: 0px;
   }
   
   body {
    background-image: url('images/background.png');
    margin: 0px;
   }
   
   .casa2 {
 	background-color:#0C0C0C;
 	width:100%;
 	height: 30px;
 	position:absolute;
 	left: 0;
 	right: 0;
   }
   
   #container {
    position: absolute;
    top: 200px;
    bottom: 25px;
    left: 0px;
    right: 85%;    
    border-radius: 0px 10px 10px 0px;
    background-color: #222;
    box-shadow: 2px 2px 2px 2px #888888;
    font: 10px 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
   }
   
   .inner {
    width: 85%;
    text-align: center;
    color: #D8D8D8;
    font: 12px 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
   }
   
   #topdiv {
    position: absolute;
    top: -27px;
    height: 50px;
    left: 10px;
    right: 10px;
    background-color: #222;
    color: #D8D8D8;
    border-radius: 50%;
    text-align: center;
    z-index: -1;
   }
   
   a:link {
    color: #0099CC;
    text-decoration: none;
   }
   
   a:visited {
    color: #0099CC;
    text-decoration: none;
   }
   
   #content_t {
    position: absolute;
    left: 0;
    top: 2px;
    width: 100%;
    color: #D8D8D8;
    text-align: center;
    z-index: 1;
    font: 13px 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
   }
   
   #main {
    position: absolute;
    top: 200px;
    bottom: 0px;
    left: 20%;
    right: 35px;    
    border-radius: 10px 10px 0px 0px;
    background-color: #F5F5F5;
    box-shadow: 2px 0px 12px 2px #888888;
    color: #222;
    text-align: center;
    padding: 6px;
   }
   
   .topdiv {
    margin-left: auto;
    margin-right: auto;
    border: 2px solid #222;
    width: 100%;
    border-radius: 10px 10px 0px 0px;
    background-color: #222;
   }
   
   .nero {
    background: #222;
    color: #D8D8D8;
   }
   
   #cont {
    position: absolute;
    top: 20px;
    bottom: 20px;
    left: 80px;
    right: 80px;
    margin-left: auto;
    margin-right: auto;
   }
   
   .fontst {
    font: 12px 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
   }
   
   .mincont {
    position: absolute;
    top: 26px;
    bottom: 0;
    width: 100%;
    overflow-y: scroll;
   }
   
   .subtab {
    text-align:center;
    width:100%; 
    border: 1px solid #D8D8D8;
    border-collapse: collapse;
    font: 13px 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
   }
   
   .subtab td {
    border: 1px solid #D8D8D8;
    border-spacing: 0;
    height: 22px;
   }
  </style>
  
  <script>
   function regp() {
    alert('You have been registered! Wait until a staffer approves your submission.');
   }
   
   function regt() {
    alert('Your team have been registered! Wait until a staffer approves your submission.');
   }
  </script>
  
 </head>

<body

 <?php
  
  if ($_GET['regplayer'] == "true") {
   echo " onload=\"regp();\"";
  }
  
  if ($_GET['regteam'] == "true") {
   echo " onload=\"regt();\"";
  }
 
 ?>
 
>

<div id="topdiv"></div>
<div id="content_t"><font color="#0099CC">&#9733;</font> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mario Kart - Match Manager &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font color="#0099CC">&#9733;</font></div>

<br>

<p align="center"><img src="images/logo.png" /></p>

<div id="casa2"> 
 <div id="cssmenu">
  <ul>
   <li class="has-sub"><a href="/"><span>Home Page</span></a>
   <ul>
         <li><a href="staff.php"><span>Staffers</span></a></li>
         <li><a href="/warslist.php"><span>War Archive</span></a></li>
         <li><a href="/check.php"><span>Control Panel</span></a></li>
      </ul></li>
   <li class="last"><a href="/#"><span>Team Rankings</span></a></li>
  <li class="last"><a href="/mariokarttab/index.php"><span>Submit War</span></a></li>
  <li class="has-sub"><a href="#"><span>Registrations</span></a>
  <ul>
         <li><a href="regteam.php"><span>Register a Team</span></a></li>
         <li><a href="regplayer.php"><span>Register a Player</span></a></li>
  </ul></li>
  </ul>
 </div>
</div>

<div id="container"> 
 <table class="inner" align="center">
  <tr>
   <td colspan="3" height="3px"></td>
  </tr>
  <tr>
   <td width="10%">
    <font color="orange" size="4">&#9733;</font>
   </td>
   <td width="80%">
    Teams Top 10
   </td>
   <td width="10%">
    <font color="orange" size="4">&#9733;</font>
   </td>
  </tr>
 </table>
 
  <?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
   $x = 1;
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }

   $result = mysqli_query($con,"SELECT * FROM clans ORDER BY `points` DESC LIMIT 0, 10");

   while($row = mysqli_fetch_array($result)) {
   
    echo " <br>
    
    <table class=\"inner\" align=\"center\" border=\"0\">
     <tr>
      <td width=\"10%\" align=\"left\">";
       
       if ($x == 1) {
     echo "<font color=\"#FFCC00\">".$x."</font>";
    } else {
     if ($x == 2) {
      echo "<font color=\"#C0C0C0\">".$x."</font>";
     } else {
      if ($x == 3) {
       echo "<font color=\"#A43500\">".$x."</font>";
      } else {
       echo $x;
      }
     }
    }
    
     echo "</td>
      <td width=\"65%\" align=\"left\">
       <a href=\"http://mkmatchmanager.altervista.org/clan.php?id=".$row['name']."\">".$row['name']."</a>
      </td>
      <td width=\"20%\">
       ".$row['points']."
      </td>
     </tr>
    </table>";
   
    $x = $x+1;
   } 

   mysqli_close($con);
   ?>
 
</div>

<div id="main">

  <br>

  <p align="center"><img src="http://mkmatchmanager.altervista.org/images/logo.png" alt="Loading..." /></p>
  
  
  <p align="center">________________________________</p>
  
  <br>
  
  <form action="diocane.php" method="POST">
   <table class="table fontst" align="center" style="width: 85%;">
    <tr style="font-weight: bold; text-align: center;">
     <td width="50%">
      Username
     </td>
     <td width="50%">
      Password
     </td>
    </tr>
    <tr style="text-align: center;">
     <td width="50%">
      <input type="text" name="username" placeholder="Username" style="width: 80%;" />
     </td>
     <td width="50%">
      <input type="password" name="passw" placeholder="Password" style="width: 80%;" />
     </td>
    </tr>
   </table>
   
   <br>
   
   <input type="submit" value="Log In" />
   
   <br>
   
   <p align="center">________________________________</p>
  </form>
 
</div>

</body>
</html>