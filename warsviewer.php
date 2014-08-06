<html>
 
 <head>
  
  <title>MK8 Match Manager</title>
  
  <link rel="stylesheet" type="text/css" href="http://mkmatchmanager.altervista.org/styles/menu.css">
  
  <style>
      .tabel {
    border: 1px solid #D8D8D8;
    border-collapse: collapse;
   }
   
   .tabel td {
    border: 1px solid #D8D8D8;
    padding: 0;
    height: 24px;
   }
   
   table.diocane td {
    background-color: #222;
    color: white;
   }
   
   table.diocane tr:hover {
    background-color: #646464;
    cursor: pointer;
   }
   
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
    left: 35px;
    right: 35px;    
    border-radius: 10px 10px 0px 0px;
    background-color: #F5F5F5;
    box-shadow: 2px 0px 12px 2px #888888;
    color: #222;
    text-align: center;
    padding: 3px;
    overflow-y: scroll;
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
   
   function calculateElo(id1, id2, score1, score2) {   
    
	var Elo1 = document.getElementById(id1).value * 1;
    var Elo2 = document.getElementById(id2).value * 1;
    
    var K;
    
    if (Elo1 <= 2500) {
     K = 20;
    } else {
     K = 10;
    }
           
    var EloDifference = Elo2 - Elo1;
    
    var percentage = 1 / ( 1 + Math.pow( 10, EloDifference / 400 ) );
    var win = Math.round( K * ( 1 - percentage ) );
    var draw = Math.round( K * ( .5 - percentage ) );
    var lose = Math.round( K * ( 0 - percentage ) );
    
    if (win == 0) {
     win = 2;
    }
    
    if (draw == 0) {
     draw = 2;
    }
    
    if (lose == 0) {
     lose = -2;
    }
    
    var uno = parseInt(document.getElementById(id1).value);
    var due = parseInt(document.getElementById(id2).value);
       
    if (score1 > score2) {
     document.getElementById(id1).value = uno + win;
    }
    
    if (score1 < score2) {
     document.getElementById(id1).value = uno + lose;
     } 
     
    if (score1 == score2) { 
     document.getElementById(id1).value = uno + draw;
    }
    
   }
  </script>
  
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
         <li><a href="
         
         <?php
          echo "dailywar.php?date=".date('Y-m-d');
         ?>
         
         "><span>Wars of the Day</span></a></li>
         <li><a href="/warslist.php"><span>Clan Wars</span></a></li>
         <li><a href="/check.php"><span>Control Panel</span></a></li>
      </ul></li>
  <li class="has-sub"><a href="#"><span>Rankings</span></a>
    <ul>
         <li><a href="/"><span>Team Rankings</span></a></li>
         <li><a href="/rankings.php"><span>Players Rankings</span></a></li>
    </ul>     
   </li>
  <li class="last"><a href="/mariokarttab/index.php" target="_blank"><span>Submit War</span></a></li>
  <li class="has-sub"><a href="#"><span>Registrations</span></a>
  <ul>
         <li><a href="regteam.php"><span>Register a Team</span></a></li>
         <li><a href="regplayer.php"><span>Register a Player</span></a></li>
  </ul></li>
  </ul>
 </div>
</div>


<div id="main"> 
 
 <table border="1" style="width: 98%" class="tabel" align="center">
  <tr class="fontst" style="text-align: center; font-weight: bold; font-size: 14px;">
   <td>Clan War Results</td>
   <td>New Team Registrations</td>
   <td>New Players Registrations</td>
  </tr>
  <tr>
   <td width="33%" valign="top">
    
    <form action="cancella.php" method="POST">
     <p align="center"><input type="submit" value="Delete remaining Clan Wars" /> &nbsp; &nbsp; <input type="button" value="Individuals" onclick="location.href='warsviewer_user.php';" /></p>
    </form>
    
    <label class="fontst">This button will clear the temp database. Be sure to click this once you have finished to update!</label>
    <p align="center">------------</p>
    
  <?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }

   $result = mysqli_query($con,"SELECT * FROM warviewer");
	$x = 0;
   while($row = mysqli_fetch_array($result)) {
   
   $x++;
   
   $clan1pt = mysqli_query($con,"SELECT * FROM clans WHERE `clans`.`name` = '".$row['clan1']."'");
   while($e = mysqli_fetch_array($clan1pt)) {
    $clan1_pts = $e['points'];
   }
   
   $clan2pt = mysqli_query($con,"SELECT * FROM clans WHERE `clans`.`name` = '".$row['clan2']."'");
   while($f = mysqli_fetch_array($clan2pt)) {
    $clan2_pts = $f['points'];
   }
    
    echo "<table class=\"tabel fontst\" align=\"center\" style=\"width: 97%; text-align: center;\">
     <tr style=\"font-weight: bold;\">
      <td width=\"5%\">
      #
      </td>
      <td width=\"20%\">
       <b>Clan 1</b>
      </td>
      <td width=\"15%\">
      <b>Score</b>
      </td>
      <td width=\"25%\">
      <b>Clan 2</b>
      </td>
      <td width=\"15%\">
      <b>Score</b>
      </td>
      <td width=\"20%\">
      <b>Table</b>
      </td>
     </tr>
    </table>
    <form action=\"mettiwar.php?clan1=".$row['clan1']."&score1=".$row['score1']."&clan2=".$row['clan2']."&score2=".$row['score2']."&table=".$row['table']."&data=".$row['date']."\" method=\"POST\">
    <table class=\"tabel fontst\" align=\"center\" style=\"width: 97%;text-align: center; margin-top: -1;\">";
    
    echo "<tr>
     <td width=\"5%\" rowspan=\"4\">
      ".$x."
     </td>
     <td width=\"20%\">
      ".$row['clan1']."
     </td>
     <td width=\"15%\">
      ".$row['score1']."
     </td>
     <td width=\"25%\">
      ".$row['clan2']."
     </td>
     <td width=\"15%\">
      ".$row['score2']."
     </td>
     <td width=\"20%\">
      <a href=\"".$row['clan1'].$row['score1'].$row['clan2'].$row['score2'].".png\" target=\"_blank\">Open</a>
     </td>
    </tr>
    <tr>
     <td colspan=\"2\">
      <input type=\"text\" value=\"".$clan1_pts."\" placeholder=\"Clan 1 points\" name=\"pts1\" style=\"width: 80%;\" id=\"in".$x."1\"/>
     </td>
     <td colspan=\"2\">
      <input type=\"text\" value=\"".$clan2_pts."\" placeholder=\"Clan 2 points\" name=\"pts2\" style=\"width: 80%;\" id=\"in".$x."2\"/>
     </td>
     <td>
      <input type=\"submit\" value=\"Accept\" onclick=\"calculateElo('in".$x."1', 'in".$x."2', '".$row['score1']."', '".$row['score2']."'); calculateElo('in".$x."2', 'in".$x."1', '".$row['score2']."', '".$row['score1']."');\" />
     </td>
    </tr>
    <tr>
     <td colspan=\"5\">
      <b>Played on:</b> ".$row['date']."
     </td>
    </tr>";
        echo "</table>";
        
     echo "<table class=\"tabel fontst\" align=\"center\" style=\"width: 97%;text-align: center; margin-top:-1\">
     <tr>
     <td width=\"25%\">
       <a href=\"".$row['clan1'].$row['score1'].$row['clan2'].$row['score2'].".txt\" target=\"_blank\">Notes</a>
      </td>
      <td width=\"25%\">
       <b>GP1:</b> &nbsp; <a href=\"".$row['gp1']."\" target=\"_blank\">Open</a>
      </td>
      <td width=\"25%\">
       <b>GP2:</b> &nbsp; <a href=\"".$row['gp2']."\" target=\"_blank\">Open</a>
      </td>
      <td width=\"25%\">
       <b>GP3:</b> &nbsp; <a href=\"".$row['gp3']."\" target=\"_blank\">Open</a>
      </td>
     </tr>
     </table> <br>";    
    }

    echo "<p align=\"center\"><b>Total:</b> ".$x."</p>";    
    mysqli_close($con);
   ?>
   
   <br>

    
   </td>
   <td width="34%" valign="top">
    <form action="cancella_regt.php" method="POST">
     <p align="center"><input type="submit" value="Delete remaining teams" /></p>
    </form>
    <label class="fontst">This button will clear the temp database. Be sure to click this once you have finished to update!</label>
    <p align="center">------------</p>
    
    <table class="tabel fontst" align="center" style="width: 90%; text-align: center;">
     <tr style="font-weight: bold;">
      <td width="5%">
       <b>#</b>
      </td>
      <td width="35%">
       <b>Clan</b>
      </td>
      <td width="15%">
      <b>Thread</b>
      </td>
      <td width="15%">
      <b>tag</b>
      </td> 
      <td width="30%">
      <b>Logo</b>
      </td>
     </tr>
    </table> 
  <?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }
   
   $result = mysqli_query($con,"SELECT * FROM regteam");
   $w = 0;
   while($row = mysqli_fetch_array($result)) {
    $w++;
    echo "<form action=\"metticlan.php?id=".$row['name']."&tag=".$row['tag']."&link=".$row['link']."&logoimp=".$row['logo']."\" method=\"POST\">
    <table class=\"tabel fontst\" align=\"center\" style=\"width: 90%; text-align: center;\">
    <tr>
     <td width=\"5%\" rowspan=\"2\">
      ".$w."
     </td>
     <td width=\"35%\">
      ".$row['name']."
     </td>
     <td width=\"15%\">
      <a href=\"".$row['link']."\">Open</a>
     </td>
     <td width=\"15%\">
      ".$row['tag']."
     </td>
     <td width=\"30%\">
      <a href=\"".$row['logo']."\">Open logo</a>
     </td>
    </tr>
    <tr>
     <td colspan=\"4\">
      <input type=\"submit\" value=\"Accept ".$row['name']."\" style=\"margin: 4px;\" />
     </td>
    </tr>";
    echo "</table></form>";
    }
    
	echo "<p align=\"center\"><b>Total:</b> ".$w."</p>";
    mysqli_close($con);
   ?>
     
   </td>
   <td width="33%" valign="top">
        <form action="cancella_regp.php" method="POST">
     <p align="center"><input type="submit" value="Delete remaining players" /></p>
    </form>
        <label class="fontst">This button will clear the temp database. Be sure to click this once you have finished to update!</label>
    <p align="center">------------</p>
    
    <table class="tabel fontst" align="center" style="width: 90%; text-align: center;">
     <tr style="font-weight: bold;">
      <td width="20%">
       <b>Name</b>
      </td>
      <td width="20%">
      <b>Clan</b>
      </td>
      <td width="20%">
      <b>NNID</b>
      </td>
      <td width="20%">
      <b>Country</b>
      </td> 
      <td width="20%">
      <b>Thread</b>
      </td> 
     </tr>
    </table> 
  <?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }
   
   $result = mysqli_query($con,"SELECT * FROM regplayer");
      
   $q = 0;
      
   while($row = mysqli_fetch_array($result)) {
       
   $q++;
   
    echo "<form action=\"mettiplayer.php?name=".$row['nome']."&clan=".$row['clan']."&nnid=".$row['nnid']."&country=".$row['regione']."&link=".$row['profilo']."\" method=\"POST\">
    <table class=\"tabel fontst\" align=\"center\" style=\"width: 90%; text-align: center;\">";
    
    echo "<tr>
     <td width=\"20%\">
      ".$row['nome']."
     </td>
     <td width=\"20%\">
      ".$row['clan']."
     </td>
     <td width=\"20%\">
      <a href=\"https://miiverse.nintendo.net/users/".$row['nnid']."\" target=\"_blank\">".$row['nnid']."</a>
     </td>
     <td width=\"20%\">
      <img src=\"http://mkmatchmanager.altervista.org/flags/".$row['regione'].".gif\" />
     </td>
     <td width=\"20%\">
      <a href=\"https://miiverse.nintendo.net/users/".$row['profilo']."\" target=\"_blank\">MKBoards</a>
     </td>
    </tr>";
     echo "</table>";
     
     echo "<table class=\"tabel fontst\" align=\"center\" style=\"width: 90%; text-align: center;\">
      <tr>
       <td>
        <input type=\"submit\" value=\"Accept ".$row['nome']."\" />
       </td>
      </tr>
     </table></form>";   
    }

	echo "<p align=\"center\"><b>Total:</b> ".$q."</p>";
    mysqli_close($con);
   ?>

   </td>
  </tr>
 </table>
 
 <br>
 <br>
 
 </div>

</body>
</html>