<html>
<head>
<title>
 Mario Kart - Table Generator
</title>

<link rel="stylesheet" type="text/css" href="http://www.mkmatchmanager.altervista.org/styles/menu.css">

<style>

 html, body {
  margin: 0;
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
   
 .fontexk {
  font:14px 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
  color: #222;
 }
  
 a:link {text-decoration: none; color: #0099CC; }
 a:visited {text-decoration: none; color: #0099CC; }
   
 input {
  text-align:center;
 }

 table.zindex
 {
  position:absolute;
  z-index:1;
  text-align:center;
  font-size:13px;
  color:ffffff;
 }

 td.giallo { color:FFCC00; }

 td.result{ font-weight:bold; }

 td.tot{ color:FFFF00; font-weight:bold; }

 img.zindexz
 {
  position:absolute;
  z-index:-1; 
 }

.transp_container2 {
 color:#000;
 background-color: white;
 opacity:0.96;
 border-radius: 6px 6px 6px 6px;
 border: 1px solid #D7D7D7;
 margin-top: 25px;
 margin-left:auto;
 margin-right:auto;
 width:90%;
 padding: 5px 5px 5px 5px;
}

.transp_container3 {
 color:#000;
 background-color: white;
 opacity:0.96;
 border-radius: 6px 6px 6px 6px;
 border: 1px solid #D7D7D7;
 margin-top: 25px;
 margin-left:auto;
 margin-right:auto;
 width:90%;
 padding: 5px 5px 5px 5px;
}

body {
 background-image:url('/images/background.png');
}

 table.tablewar2 {
    text-align: center;
    border: 2px solid #000000;
    background-color: #000000;
    border-collapse: collapse;
   }
   
 table.tablewar2 td {
	border-width: 2px;
	padding: 2px;
	border-style: solid;
	border-color: black;
   }
   
  .t4blu { background-color:#333399; color:#FFFFFF; }
  .t4grigio { background-color:#808080; color:#FFFFFF; }
  .t4neretto { background-color:#333333; color:#FFFFFF; }
  .t4gold { background-color:#FFCC00; color:#FFFFFF; }
  .t4silver { background-color:#C0C0C0; color:#FFFFFF; }
  .t4bronze { background-color:#A43500; color:#FFFFFF; }
  
  .vvbasb {
   display: none;
   visibility: hidden;
  }
</style>

<script src="functions.js"></script>
<script src="jscolor.js"></script>
<script src="html2canvas.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="stylesettings.css">
<link rel="stylesheet" href="stilitab.css">

   <script>
     $(function() {
		$( "#datepicker" ).datepicker();
         $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
     });
     
     function update_tag(sclan,stag,end,status) {
      var temp = document.forms[0].elements[sclan].selectedIndex;
      var tagr = document.forms[0].elements[stag].options[temp-1].value;
      
      document.getElementById(end).value = tagr;
      tag(status,tagr,' ');
     }
     
     function colori(el) {
  	  if (el.value == "1")
       el.style.color='#ffbb00'; 
      else 
       el.style.color='#989898';
     }
 
	$(function(){
    $('#mainbut').on('click',function() {
	var testdiv = document.getElementById("tablex");
	  html2canvas($("#tablex"), {
      onrendered: function(canvas) {
      
       // canvas is the final rendered <canvas> element
        var myImage = canvas.toDataURL("image/png");
                
        document.getElementById("tablelinkl").value = myImage;
        }
       });
      });
    }); 

 </script>

</head>
<body onload="document.getElementById('note').innerHTML = '';">

<div id="topdiv"></div>
<div id="content_t"><font color="#0099CC">&#9733;</font> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mario Kart - Match Manager &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font color="#0099CC">&#9733;</font></div>

<br>

<p align="center"><img src="/images/logo.png" /></p>

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

<br>

<form action="/salva.php" method="POST">
<div class="transp_container2">

<?php
     echo "<input readonly type=\"text\" name=\"dataoggi\" value=\"".date('Y-m-d')."\" class=\"vvbasb\"/>";
?>
    
<table id="tabella" align="center" style="width:95%;text-align:center;" border="0">
<tr>
<td width="50%" height="35px">
 <p class="fontexk"><font color="orange">&#9733;</font> &nbsp; &nbsp; <select style="width:200px;" id="htag" name="clan12" onchange="update_tag('htag','t1k','unof','home_t');">
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
</select> &nbsp; <input type="text" style="width:80px;" value="" readonly id="unof" />
<select style="display:none; visibility:hidden;" id="t1k" readonly>
 <?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
   $x = 1;
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }

   $result = mysqli_query($con,"SELECT * FROM clans ORDER BY `name` ASC");

   while($row = mysqli_fetch_array($result)) {
    echo "<option value=\"".$row['tag']."\">".$row['tag']."</option>";
   }
   
   mysqli_close($con);
 ?>
</select>
 &nbsp; &nbsp; <font color="orange">&#9733;</font></p>
</td>
<td width="50%">
 <p class="fontexk"><font color="orange">&#9733;</font> &nbsp; &nbsp; <select style="width:200px;" id="otag" name="clan22" onchange="update_tag('otag','t2k','duef', 'oppo_t');">
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
</select> &nbsp; <input type="text" style="width:80px;" value="" readonly id="duef" />
<select style="display:none; visibility:hidden;" id="t2k">
<?php
   $con=mysqli_connect("localhost","mkmatchmanager","cavbamubsa33","my_mkmatchmanager");
   $x = 1;
 
   if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . " Try to load again the page or contact an Admin.";
   }

   $result = mysqli_query($con,"SELECT * FROM clans ORDER BY `name` ASC");

   while($row = mysqli_fetch_array($result)) {
    echo "<option value=\"".$row['tag']."\">".$row['tag']."</option>";
   }
   
   mysqli_close($con);
 ?>
</select> &nbsp; &nbsp; <font color="orange">&#9733;</font></p>
</td>
</tr>
<td width="50%">

<table id="tabini11" border="0" align="center" style="width:550px">
<tr>
<td width="100px" valign="bottom">
<p align="center" class="fontexk"><b>Players</b></p>
</td>
<td valign="bottom" width="50px">
<p align="center" class="fontexk"><b>GP1</b></p>
</td>
<td valign="bottom" width="50px">
<p align="center" class="fontexk"><b>GP2</b></p>
</td>
<td valign="bottom" width="50px">
<p align="center" class="fontexk"><b> GP3  </b></p>
</td>
<td valign="bottom" width="50px">
<p align="center" class="fontexk"><b> Total</b></p>
</td>
<td valign="bottom" width="50px">
<p align="center" class="fontexk"><b> Average</b></p>
</td>
<td valign="bottom">
<p align="center" class="fontexk"><b>MVP</b></p>
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p1_1h" type="text" name="p1_1h" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p1_2h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p1_3h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p1_4h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p1_5h" type="text" value="0" readonly style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p1_6h" type="text" value="0" readonly  style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp1" type="text" value="0" readonly  style="width:100%" onchange="colori(this);">
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p2_1h" type="text" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p2_2h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p2_3h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p2_4h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p2_5h" type="text" value="0" readonly style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p2_6h" type="text" value="0" readonly style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp2" type="text" value="0" readonly style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p3_1h" type="text" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p3_2h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p3_3h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p3_4h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p3_5h" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p3_6h" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp3" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p4_1h" type="text" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p4_2h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p4_3h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p4_4h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p4_5h" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p4_6h" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp4" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>  
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p5_1h" type="text" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p5_2h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p5_3h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p5_4h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p5_5h" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p5_6h" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp5" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p6_1h" type="text" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p6_2h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p6_3h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p6_4h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p6_5h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p6_6h" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp6" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
</tr>
</table>

</td>
<td width="50%">
<table id="tabini12" border="0" align="center" style="width:550px">
<tr>
<td width="80px" valign="bottom">
<p align="center" class="fontexk"><b>Players</b></p>
</td>
<td valign="bottom" width="40px">
<p align="center" class="fontexk"><b>GP1</b></p>
</td>
<td valign="bottom" width="40px">
<p align="center" class="fontexk"><b>GP2</b></p>
</td>
<td valign="bottom" width="40px">
<p align="center" class="fontexk"><b> GP3  </b></p>
</td>
<td valign="bottom" width="40px">
<p align="center" class="fontexk"><b> Total</b></p>
</td>
<td valign="bottom" width="40px">
<p align="center" class="fontexk"><b> Average</b></p>
</td>
<td valign="bottom" width="40px">
<p align="center" class="fontexk"><b> MVP</b></p>
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p1_1o" type="text" name="p1_1h" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p1_2o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p1_3o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p1_4o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p1_5o" type="text" value="0" style="width:100%" readonlyonchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p1_6o" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp7" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p2_1o" type="text" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p2_2o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p2_3o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p2_4o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p2_5o" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p2_6o" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp8" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p3_1o" type="text" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p3_2o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p3_3o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p3_4o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p3_5o" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p3_6o" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp9" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p4_1o" type="text" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p4_2o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p4_3o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p4_4o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p4_5o" type="text" value="0" style="width:100%" readonly  onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p4_6o" type="text" value="0" style="width:100%" readonly  onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp10" type="text" value="0" style="width:100%" readonly  onchange="individuals(); update_gps(); calc(); generatab();">
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p5_1o" type="text" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p5_2o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p5_3o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p5_4o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p5_5o" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p5_6o" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp11" type="text" value="0" style="width:100%" readonly onchange="individuals(); update_gps(); calc(); generatab();">
</td>
</tr>
<tr>
<td width="80px" valign="bottom">
<input id="p6_1o" type="text" value="" style="width:100%">
</td>
<td valign="bottom" width="40px">
<input id="p6_2o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p6_3o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p6_4o" type="text" value="0" style="width:100%" onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p6_5o" type="text" value="0" style="width:100%" readonly  onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="p6_6o" type="text" value="0" style="width:100%" readonly  onchange="individuals(); update_gps(); calc(); generatab();">
</td>
<td valign="bottom" width="40px">
<input id="mvp12" type="text" value="0" style="width:100%" readonly  onchange="individuals(); update_gps(); calc(); generatab();">
</td>
</tr>
</table>
</td>
</table>

<br>

<table id="tabmain3" border="0" align="center" style="width:95%;">
<tr>
<td width="50%">         
<table id="tabmain" border="0" align="center" style="width:430px;">
<tr>
<td width="40px" valign="bottom">
</td>
<td valign="bottom" width="110px">
<p align="center" class="fontexk" id="home_t"><b>Home Team</b></p>
</td>
<td valign="bottom" width="130px">
<p align="center" class="fontexk" id="oppo_t"><b>Opponent Team</b></p>
</td>
<td valign="bottom" width="110px">
<p align="center" class="fontexk"><b> + / -  </b></p>
</td>
</tr>
<tr>
<td width="40px" >
<p align="center"><b>GP1</b></p>
</td>
<td width="110px">
<p align="center"><input id="h1" type="text" name="h1" value="0" style="width:70px" onchange="calc(); generatab();"></p>
</td>
<td width="110px">
<p align="center"><input id="o1" type="text" name="o1" value="0" style="width:70px" onchange="calc(); generatab();"></p>
</td>
<td width="110px">
<p align="center"><input readonly id="diff1" type="text" name="diff1" style="width:70px"></p>
</td>
<td>
</td>
</tr>
<tr>
<td width="40px">
<p align="center"><b>GP2</b></p>
</td>
<td width="110px">
<p align="center"><input id="h2" type="text" name="h2" value="0" style="width:70px" onchange="calc(); generatab();"></p>
</td>
<td width="110px">
<p align="center"><input id="o2" type="text" name="o2" value="0" style="width:70px" onchange="calc(); generatab();"></p>
</td>
<td width="110px">
<p align="center"><input readonly  id="diff2" type="text" name="diff2" style="width:70px"></p>
</td>
<td>
</td>
</tr>
<tr>
<td width="40px">
<p align="center"><b>GP3</b></p>
</td>
<td width="110px">
<p align="center"><input id="h3" type="text" name="h3" value="0" style="width:70px" onchange="calc(); generatab();"></p>
</td>
<td width="110px">
<p align="center"><input id="o3" type="text" name="o3" value="0" style="width:70px" onchange="calc(); generatab();"></p>
</td>
<td width="110px">
<p align="center"><input readonly  id="diff3" type="text" name="diff3" style="width:70px"></p>
</td>
<td>
</td>
</tr>
<tr>
<td width="40px">
<b>Penalty</b>
</td>
<td width="110px">
<p align="center"><input type="text" style="width:70px" value="0" id="penal1" onchange="calc();" /></p>
</td>
<td width="110px">
<p align="center"><input type="text" style="width:70px" value="0" id="penal2" onchange="calc();" /></p>
</td>
<td width="110px">
 &nbsp;
</td>
<td>
</td>
</tr>
<tr>
<td width="40px">
<b>TOTAL</b>
</td>
<td width="110px">
<p align="center"><input readonly  id="htot" type="text" name="htot" style="width:70px" value="0"></p>
</td>
<td width="110px">
<p align="center"><input readonly id="otot" type="text" name="otot" style="width:70px" value="0"></p>
</td>
<td width="110px">
<p align="center"><input readonly id="difftot" type="text" name="difftot" style="width:70px" value="0"></p>
</td>
<td>
</td>
</tr>
</table>

</td>
<td width="50%" valign="top">
 
 <table style="width: 98%;" align="center">
 <tr>
  <td>
   <b>Notes</b> - <i>Please include pictures and explanations of disconnections here.</i>
   <textarea style="width: 98%; height: 150px;" id="noted" name="noted"></textarea>
  </td>
 </tr>
</table>

</td>
</tr>
</table>

<br>
<br>

<table style="width: 90%; text-align: center;" align="center" border="0">
 <tr>
  <td width="50%" valign="top">
   <input type="text" placeholder="GP1 picture. This field is required." name="gp1p" style="width:90%;"/>
    <p> </p>
    <input type="text" placeholder="GP2 picture. This field is required." name="gp2p" style="width:90%;"/>
    <p> </p>
    <input type="text" placeholder="GP3 picture. This field is required." name="gp3p" style="width:90%;"/>
  </td>
  <td width="50%" height="150px" valign="top">
   <input readonly type="text" id="tablelinkl" placeholder="Link of the table (Generated automatically after the submission)." name="tabellina" style="width:90%;"/>
   <br>
   <br>
   <input type="submit" style="height:40px;width:150px;" value="SUBMIT THIS WAR" id="mainbut" />
  </td>
 </tr>
</table>
    
</div>
</form>

<br>

<fieldset style="border: 1px solid #D8D8D8; width: 90%; margin-left: auto; margin-right:auto;">
<legend style="color: #0099CC; border-radius: 5px 5px 5px 5px"> Clan War Table </legend>
<div id="tablex">
<table id="table1" align="center" class="tablewar">
   <tr class="top">
    <td width="180px">
     <b>Player Name</b>
    </td>
    <td width="60px">
     <b>Clan</b>
    </td>
    <td width="100px">
     <b>GP1</b>
    </td>
    <td width="100px">
     <b>GP2</b>
    </td>
    <td width="100px">
     <b>GP3</b>
    </td>
    <td width="100px">
     <b>Total</b>
    </td>
    <td width="80px">
     <b>Avg</b>
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv1_1">
     -
    </td>
    <td class="col1" id="tag1">
     -
    </td>
    <td style="color: #FFFFFF;" id="p1_2h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p1_3h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p1_4h_1">
     0
    </td>
    <td class="col1" id="p1_5h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg1">
     0
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv2_1">
     -
    </td>
    <td class="col1" id="tag2">
     -
    </td>
    <td style="color: #FFFFFF;" id="p2_2h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p2_3h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p2_4h_1">
     0
    </td>
    <td class="col1" id="p2_5h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg2">
     0
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv3_1">
     -
    </td>
    <td class="col1" id="tag3">
     -
    </td>
    <td style="color: #FFFFFF;" id="p3_2h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p3_3h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p3_4h_1">
     0
    </td>
    <td class="col1" id="p3_5h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg3">
     0
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv4_1">
     -
    </td>
    <td class="col1" id="tag4">
     -
    </td>
    <td style="color: #FFFFFF;" id="p4_2h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p4_3h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p4_4h_1">
     0
    </td>
    <td class="col1" id="p4_5h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg4">
     0
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv5_1">
     -
    </td>
    <td class="col1" id="tag5">
     -
    </td>
    <td style="color: #FFFFFF;" id="p5_2h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p5_3h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p5_4h_1">
     0
    </td>
    <td class="col1" id="p5_5h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg5">
     0
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv6_1">
     -
    </td>
    <td class="col1" id="tag6">
     -
    </td>
    <td style="color: #FFFFFF;" id="p6_2h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p6_3h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p6_4h_1">
     0
    </td>
    <td class="col1" id="p6_5h_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg6">
     0
    </td>
   </tr>
   <tr class="bottomtr">
    <td class="col1" id="clan1_1">
     <label style="18px Candara, Calibri, Segoe, 'Segoe UI', Optima, Arial, sans-serif"><b>clan 1</b></label>
    </td>
    <td class="col2"  id="pen1_1">
     -
    </td>
    <td class="col1" id="total1h_1">
     0
    </td>
    <td class="col1" id="total2h_1">
     0
    </td>
    <td class="col1" id="total3h_1">
     0
    </td>
    <td class="col2" id="total4h_1">
     <font color="#FFFF00"><b>0</b></font>
    </td>
    <td class="col1" id="avg1h">
     0
    </td>
   </tr>
   <tr>
    <td colspan="7" style="background-color: #000000;"> </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv7_1">
     -
    </td>
    <td class="col1" id="tag7">
     -
    </td>
    <td style="color: #FFFFFF;" id="p1_2o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p1_3o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p1_4o_1">
     0
    </td>
    <td class="col1" id="p1_5o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg7">
     0
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv8_1">
     -
    </td>
    <td class="col1" id="tag8">
     -
    </td>
    <td style="color: #FFFFFF;" id="p2_2o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p2_3o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p2_4o_1">
     0
    </td>
    <td class="col1" id="p2_5o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg8">
     0
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv9_1">
     -
    </td>
    <td class="col1" id="tag9">
     -
    </td>
    <td style="color: #FFFFFF;" id="p3_2o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p3_3o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p3_4o_1">
     0
    </td>
    <td class="col1" id="p3_5o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg9">
     0
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv10_1">
     -
    </td>
    <td class="col1"  id="tag10">
     -
    </td>
    <td style="color: #FFFFFF;" id="p4_2o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p4_3o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p4_4o_1">
     0
    </td>
    <td class="col1" id="p4_5o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg10">
     0
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv11_1">
     -
    </td>
    <td class="col1" id="tag11">
     -
    </td>
    <td style="color: #FFFFFF;" id="p5_2o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p5_3o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p5_4o_1">
     0
    </td>
    <td class="col1" id="p5_5o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg11">
     0
    </td>
   </tr>
   <tr>
    <td style="color: #FFCC00;" id="indiv12_1">
     -
    </td>
    <td class="col1" id="tag12">
     -
    </td>
    <td style="color: #FFFFFF;" id="p6_2o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p6_3o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="p6_4o_1">
     0
    </td>
    <td class="col1" id="p6_5o_1">
     0
    </td>
    <td style="color: #FFFFFF;" id="avg12">
     0
    </td>
   </tr>
   <tr class="bottomtr">
    <td class="col1" id="clan2_1">
     <label style="18px Candara, Calibri, Segoe, 'Segoe UI', Optima, Arial, sans-serif"><b>clan 2</b></label>
    </td>
    <td class="col2" id="pen2_1">
     -
    </td>
    <td class="col1" id="total1o_1">
     0
    </td>
    <td class="col1" id="total2o_1">
     0
    </td>
    <td class="col1" id="total3o_1">
     0
    </td>
    <td class="col2" id="total4o_1">
     <font color="#FFFF00"><b>0</b></font>
    </td>
    <td class="col1" id="avg2o">
     0
    </td>
   </tr>
   
  </table>
    </div>  
  <br>
  
  <table align="center" style="width:40%; text-align: center" id="color1" border="0">
   <tr class="fontexk">
    <td width="50%">
     <b>Clan 1 colors</b>
    </td>
    <td width="50%">
     <b>Clan 2 colors</b>
    </td>
   </tr>
   <tr class="fontexk">
    <td width="50%">
     <input class="color" id="colorpk"> &nbsp; <input type="button" value="Apply" onclick="tab1(document.getElementById('colorpk').value);" />
    </td>
    <td width="50%">
     <input class="color" id="colorpj"> &nbsp; <input type="button" value="Apply" onclick="tab2(document.getElementById('colorpj').value);"/>
    </td>
   </tr>
  </table>

</fieldset>

<br>
<br>
<div class="bottomdiv">
<label style="margin:auto;"><font color="orange">&#9733;</font> &nbsp; Tables generated with Clan War Reporter 10.0.0  - Website and Software made by BetoMan &nbsp; <font color="orange">&#9733;</font></label>
</div>

</body>
</html>