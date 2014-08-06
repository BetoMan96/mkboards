<html>

 <head>
 
  <style>
   
   a:link {color: #0099CC; text-decoration: none;}
   a:visited {color: #0099CC; text-decoration: none;}
   
   .diocane {
    width: 95%;
    text-align: center;
   }
   
   .tabel {
    border: 1px solid #D8D8D8;
    border-collapse: collapse;
   }
   
   .tabel td {
    border: 1px solid #D8D8D8;
    padding: 0;
    height: 35px;
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
   
 </head>

<body>
  
  <br>
  
  <p align="center"><input type="button" value="Back to Control Panel - Main Page" onclick="location.href='warsviewer.php'" /></p>
  
  <br>
  
  <table style="width: 90%;" align="center">
  <tr>
  <td align="center">

  <?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }
   
   $result = mysqli_query($con,"SELECT * FROM players ORDER BY clan ASC");
   
   $x = 0;
   
   echo "
     <form action=\"aggiorna.php\" method=\"POST\" style=\"margin:-1;\" align>
     <table class=\"tabel fontst\" style=\"width: 50%; text-align: center;\">
      <tr style=\"font-weight: bold; background-color: #6C6C6C;\">
       <td width=\"5%\">
        #
       </td>
       <td width=\"25%\">
        clan
       </td>
       <td width=\"30%\">
        Player's name
       </td>
       <td width=\"25%\">
        Points
       </td>
       <td width=\"15%\">
        Update
       </td>
      </tr>
     </table>
     </form>
    ";
    
   while($row = mysqli_fetch_array($result)) {
   
   $x++;
   
    echo "
     <form action=\"aggiorna.php\" method=\"POST\" style=\"margin:-1;\">
     <table class=\"tabel fontst\" style=\"width: 50%; text-align: center;\">
      <tr>
       <td width=\"5%\">
        ".$x."
       </td>
       <td width=\"25%\">
        ".$row['clan']."
       </td>
       <td width=\"30%\">
        <input readonly value=\"".$row['name']."\" type=\"text\" name=\"pname\" />
       </td>
       <td width=\"25%\">
        <input type=\"text\" value=\"".$row['points']."\" style=\"width: 80%;\" align=\"center\" name=\"pts\"/>
       </td>
       <td width=\"15%\">
        <input type=\"submit\" value=\"Update\" style=\"width: 80%;\" align=\"center\" />
       </td>
      </tr>
     </table>
     </form>
    ";
    
    }

    mysqli_close($con);
   ?>
   
   </td>
   </tr>
   </table>

</body>
</html>