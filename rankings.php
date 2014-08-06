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
   
   .tabel {
    border: 1px solid #D8D8D8;
    border-collapse: collapse;
   }
   
   .tabel td {
    border: 1px solid #D8D8D8;
    padding: 0;
    height: 24px;
   }
   
   .nero {
    background: #222;
    color: #D8D8D8;
   }
   
   #cont {
    position: absolute;
    top: 85px;
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
       <a href=\"http://mkmatchmanager.altervista.org/clan.php?id=".$row['clan']."\">".$row['name']."</a>
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
  
  <table style="width: 90%; text-align: center;" align="center" class="tabel fontst">
     <tr>
      <td width="33%" align="center">
        <b>Select Clan</b>: &nbsp; <select style="width:150px;" id="datepicker">
  <option selected="selected" disabled="disabled" value="Choose clan name">Choose clan name</option>
 <?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
   $x = 1;
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }

   $result = mysqli_query($con,"SELECT * FROM clans ORDER BY `name` ASC");

   while($row = mysqli_fetch_array($result)) {
    echo "<option value=\"".$row['name']."\">".$row['name']."</option>";
   }
   
   mysqli_close($con);
 ?>
</select>
      </td>
      <td width="34%" align="center">
       <input type="button" value="Change View" onclick="location.href='show.php?id='+document.getElementById('datepicker').value;" />
      </td>
      <td width="33%" align="center">
       <input type="button" value="Players Rankings" onclick="location.href='/rankings.php" />
      </td>
     </tr>
    </table> 
    
   <br>
 
 <div id="cont">
 <div class="topdiv">
 <table style="text-align:center; width:98%;" class="fontst" border="0">
  <tr class="nero">
   <td width="25%">
    Player Name
   </td>
   <td width="12%">
    Country
   </td>
   <td width="13%">
    GPs Played
   </td>
   <td width="13%">
    Average
   </td>
   <td width="25%">
    NNID
   </td>
   <td width="12%">
    Profile
   </td>
  </tr>
 </table>
 </div>
 
 <div class="mincont">
  
  <?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
   $x = 1;
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }

   $result = mysqli_query($con,"SELECT * FROM players WHERE `gp` >= 3 ORDER BY `clan` ASC");

   while($row = mysqli_fetch_array($result)) {
    
    $tot = ($row['gp'])*60;
    
    echo "<table class=\"subtab\" align=\"center\">
    <tr>
    <td width=\"25%\">
    <a href=\"http://mkmatchmanager.altervista.org/clan.php?id=".$row['clan']."\">".$row['name']."</a>
    </td>
    <td width=\"12%\">
    <img src=\"/flags/".$row['country'].".gif\" />
    </td>
    <td width=\"13%\">
    ".$row['gp']."
    </td>
    <td width=\"13%\">
    ". round( ($row['points'])/$tot , 2)."
    </td>
    <td width=\"25%\">
     <a href=\"https://miiverse.nintendo.net/users/".$row['nnid']."\" target=\"_blank\">".$row['nnid']."</a>
    </td>
    <td width=\"12%\">";
     
     if ($row['profile'] != "-") {
      echo "<a href=\"".$row['profile']."\">Open</a>";
     } else {
      echo "-";
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
 
</div>

</body>
</html>