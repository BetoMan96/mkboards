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
    text-align: left;
    padding: 3px;
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
    font: 14px 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
   }
   
   .tabel {
    border: 1px solid #D8D8D8;
    border-collapse: collapse;
   }
   
   .tabel td {
    border: 1px solid #D8D8D8;
    padding: 0;
    height: 24px;
   }
   
   .tabel2 {
    border: 1px solid #D8D8D8;
    border-collapse: collapse;
   }
   
   .tabel2 td {
    border: 1px solid #D8D8D8;
    padding: 0;
    height: 32px;
   }
   
   #mkbl:hover {
    border: 1px solid #0099CC;
    border-radius: 4px 4px 4px 4px;
    box-shadow: 1px 2px 2px 2px #0099CC;
   }
   
   .spazio {
    margin: 4px;
   }
   
   #innerdiv {
    position: absolute;
    top: 4px;
    left: 4px;
    right: 6px;
    bottom: 4px;
    overflow-y: scroll;
   }
  </style>
  
  <script>
   function cambia(id, field) {
    document.getElementById(id).innerHTML = document.getElementById(field).value;
   }
  </script>
  
 </head>
 
<body onload="cambia('numero', 'fields'); cambia('numero2', 'fields2');">

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

 <div id="innerdiv">
 
  <?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }

   $result = mysqli_query($con,"SELECT * FROM clans WHERE name = '".$_GET['id']."'");

   while($row = mysqli_fetch_array($result)) {
   
    echo "<br>
    <table style=\"width: 90%; text-align: center;\" align=\"center\">
     <tr>
      <td width=\"100%\" align=\"left\">
       <font size=\"4\"><b>".$_GET['id']."</b></font> &nbsp; - &nbsp; ".$row['tag']."
      </td>
     </tr>
    </table>";
   
    echo "<br>";
    
    echo "
    <table style=\"width: 90%; text-align: center;\" align=\"center\" class=\"fontst\">
     <tr>
      <td width=\"30%\" valign=\"center\">
      
      <div style=\"margin-left: auto; margin-right: auto; width: 200px;\">
      <img src=\"".$row['banner']."\" alt=\"".$row['tag']." logo - not available.\" style=\"max-width:100%; max-height:100%;\" />
      </div>
      
      </td>
      <td wdith=\"70%\" align=\"center\">
      
      <table style=\"width: 90%; text-align: left;\" align=\"center\" class=\"tabel2 fontst\">
      <tr>
      <td width=\"40%;\">
      &nbsp; <b>War Record</b>: &nbsp; &nbsp; <font color=\"green\">".$row['win']."</font> - <font color=\"orange\">".$row['tie']."</font> - <font color=\"red\">".$row['lose']."</font>
      </td>
      <td rowspan=\"4\" width=\"60%;\" align=\"center\" valign=\"center\">
      
        <a href=\"".$row['link']."\" target=\"_blank\"><img id=\"mkbl\" src=\"/images/mkblogo.png\" alt=\"Loading...\"/></a>
        <p><font style=\"fontst\" size=\"1\" color=\"#D8D8D8\">Click to open ".$row['name']."'s thread</font></p>
      </td>
      </tr>
      <tr>
      <td>
      &nbsp;  <b>Rating</b>: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ".$row['points']."
      </td>
      </tr>
      <tr>
      <td>
      &nbsp;  <b>Members</b>: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<font color=\"#0099CC\"><label id=\"numero\">0</label></font>
      </td>
      </tr>
      <tr>
      <td>
      &nbsp;  <b>Wars Played</b>: &nbsp; &nbsp;<label id=\"numero2\">0</label>
      </td>
      </tr>
      </table>
       
      </td>
     </tr>
    </table>";
       
    echo "<br><br>
    <table style=\"width: 90%; text-align: center;\" align=\"center\">
     <tr>
      <td width=\"100%\" align=\"left\">
       <font size=\"4\"><b>Members List</b></font> &nbsp; - &nbsp; ".$row['tag']."
      </td>
     </tr>
    </table><br>";
    
    }
    
    echo "
    <table style=\"width: 90%; text-align: center;\" align=\"center\">
     <tr>
      <td width=\"100%\" align=\"left\">
    <table style=\"width: 100%; text-align: center;\" align=\"left\" class=\"tabel fontst\">
     <tr style=\"font-weight: bold;\">
      <td width=\"5\">
       #
      </td>
      <td width=\"20%\">
       Player's Name
      </td>
      <td width=\"10%\">
       Country
      </td>
      <td width=\"15%\">
       GPs Played
      </td>
      <td width=\"10%\">
       Average
      </td>
      <td width=\"20%\">
       NNID
      </td>
      <td width=\"20%\">
       Profile
      </td>
     </tr>";
     
     $cas = mysqli_query($con,"SELECT * FROM players WHERE clan = '".$_GET['id']."' ORDER BY name ASC");
     
     $conto = 0;

     while($row = mysqli_fetch_array($cas)) {
     
     $conto += 1;
     
      echo "<tr>
      <td width=\"5%\">
       ".$conto."
      </td>
      <td width=\"20%\">
       ".$row['name']."
      </td>
      <td width=\"10%\">
       <img src=\"http://mk7vrlist.altervista.org/flags/".$row['country'].".gif\" />
      </td>
      <td width=\"15%\">
       ".$row['gp']."
      </td>
      <td width=\"10%\">
       ".round( ($row['points'])/(($row['gp'])*4) ,1)."
      </td>
      <td width=\"20%\">
       <a href=\"https://miiverse.nintendo.net/users/".$row['nnid']."\" target=\"_blank\">".$row['nnid']."</a>
      </td>
      <td width=\"20%\">";
     
     if ($row['profile'] != "-") {
      echo "<a href=\"".$row['profile']."\" target=\"_blank\">MKBoards Profile</a>";
     } else {
      echo "-";
     } 
     
    echo "</td>
     </tr>";
     
     }    
     
    echo "</table>
      </td>
     </tr>
    </table>";
    
    echo "<input type=\"text\" value=\"".$conto."\" style=\"visibility: hidden; display: none;\" id=\"fields\">";
    
    
    echo "<br><br>
    <table style=\"width: 90%; text-align: center;\" align=\"center\">
     <tr>
      <td width=\"100%\" align=\"left\">
       <font size=\"4\"><b>Clan Wars</b></font>
      </td>
     </tr>
    </table><br>";   
    
    echo "
    <table style=\"width: 90%; text-align: center;\" align=\"center\">
     <tr>
      <td width=\"100%\" align=\"left\">
    <table style=\"width: 100%; text-align: center;\" align=\"left\" class=\"tabel fontst\">
     <tr style=\"font-weight: bold;\">
      <td width=\"10%\">
       #
      </td>
      <td width=\"20%\">
       Home Clan
      </td>
      <td width=\"10%\">
       Total
      </td>
      <td width=\"5%\">
       vs
      </td>
      <td width=\"10%\">
       Total
      </td>
      <td width=\"20%\">
       Opponent Clan
      </td>
      <td width=\"10%\">
       Table
      </td>
      <td width=\"15%\">
       Date
      </td>
     </tr>";
     
     $cas = mysqli_query($con,"SELECT * FROM clanwars WHERE clan1 = '".$_GET['id']."' OR clan2 = '".$_GET['id']."' ORDER BY date DESC");
     
     $x = 1;
     
     while($row = mysqli_fetch_array($cas)) {
      echo "<tr>
      <td width=\"10%\">
       ".$x."
      </td>
      <td width=\"20%\">
       <a href=\"http://mkmatchmanager.altervista.org/clan.php?id=".$row['clan1']."\">".$row['clan1']."</a>
      </td>
      <td width=\"10%\">
       ".$row['score1']."
      </td>
      <td width=\"5%\">
       vs
      </td>
      <td width=\"10%\">
       ".$row['score2']."
      </td>
      <td width=\"20%\">
       <a href=\"http://mkmatchmanager.altervista.org/clan.php?id=".$row['clan2']."\">".$row['clan2']."</a>
      </td>
      <td width=\"10%\">
       <a href=\"".$row['table']."\">Open</a>
      </td>
      <td width=\"15%\">
       ".date('jS F Y', strtotime($row['date']))."
      </td>
     </tr>";
     
     $x += 1;
     
     }    
     
     
     echo "</table> <br><br>";
     
     echo "<input type=\"text\" value=\"".($x-1)."\" style=\"visibility: hidden; display: none;\" id=\"fields2\">";
   

   mysqli_close($con);
   ?>
  </div>
 
</div>

</body>
</html>