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
    
   }
   
   .subtab {
    text-align:center;
    width: 80%; 
    border: 1px solid #D8D8D8;
    border-collapse: collapse;
    font: 13px 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
   }
   
   .subtab td {
    border: 1px solid #D8D8D8;
    border-spacing: 0;
    height: 22px;
   }
   
   .subtab2 {
    text-align:center;
    width: 80%; 
    border: 1px solid #D8D8D8;
    border-collapse: collapse;
    font: 13px 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
   }
   
   .subtab2 td {
    border: 1px solid #D8D8D8;
    border-spacing: 0;
    height: 30px;
   }
   
   #contorno {
    position: absolute;
    top: 5px;
    bottom: 3px;
    right: 8px;
    left: 8px;
    overflow-y: scroll;
   }
  </style>
  
 </head>
 
<body>

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
  
  <div id="contorno">
  <?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
   $x = 1;
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }

   $result = mysqli_query($con,"SELECT * FROM staff ORDER BY `name` ASC");
   
   $conto = 0;
   
   while($row = mysqli_fetch_array($result)) {
   
    $conto++;
   
    echo "<br>
    <table class=\"subtab\" align=\"center\">
    <tr>
     <td width=\"20%\">
      <img src=\"".$row['img']."\" />
     </td>
     <td width=\"80%\" rowspan=\"2\">
      
      <table class=\"subtab2\" align=\"center\">
       <tr>
        <td width=\"15%\">
         <b>Country</b>
        </td>
        <td width=\"35%\">
         <img src=\"http://mkmatchmanager.altervista.org/flags/".$row['country'].".gif\" />
        </td>
        <td width=\"15%\">
         <b>NNID</b>
        </td>
        <td width=\"35%\">
         <a href=\"https://miiverse.nintendo.net/users/".$row['nnid']."\">".$row['nnid']."</a>
        </td>
       </tr>
       <tr>
        <td width=\"15%\">
         <b>Role</b>
        </td>
        <td width=\"35%\">
         ".$row['role']."
        </td>
        <td width=\"15%\">
         <b>Clan</b>
        </td>
        <td width=\"35%\">
         <a href=\"http://mkmatchmanager.altervista.org/clan.php?id=".$row['clan']."\">".$row['clan']."</a>
        </td>
       </tr>
       <tr>
        <td width=\"15%\">
         <b>MKBoards</b>
        </td>
        <td width=\"35%\">
         <a href=\"".$row['role']."\">Profile</a>
        </td>
        <td width=\"15%\">
         <b>Twitter</b>
        </td>
        <td width=\"35%\">";
         
         if ($row['twitter'] != "-") {
          echo "<a href=\"https://twitter.com/".$row['twitter']."\">".$row['twitter']."</a>";
         } else {
          echo "-";
         }
         
        echo "</td>
       </tr>
      </table>
      
     </td>
    </tr>
    <tr>
     <td>
      ".$row['name']."";
     
     $result2 = mysqli_query($con,"SELECT * FROM players WHERE `name` = '".$row['name']."'");
     
     if ($casa = mysqli_fetch_array($result2)) {     
      echo " - <a href=\"http://mkmatchmanager.altervista.org/rankings.php\">".$casa['points']."</a> pts.";
     } 
     
    echo "</td>
    </tr>
   </table>";
   
   $x = $x+1;
  } 

  mysqli_close($con);
 ?>
 </div>
 
</div>

</body>
</html>