<!doctype html>
<?php
session_start();
?>


<html>
<head>
   	<meta charset="UTF-8">
   	<title>Daniel Prototype</title>
   	<link rel="stylesheet" href="game.css">
	  <script src="sarge_mechanics.js"></script>
    <script type="text/javascript" src="tools/jquery.js"></script>
    
</head>
<body >
    

	<p id="title">The Sarge</p>
	<div id="story" >
    
      <p>You are inside the walls, you know that you are far from safe since now you must be wary of the patrols and the tower lights </p>
      <p> You could try to dash through the cover of darkness or try to mess with the wires in one of the towers, securing an escape route but if you failed to disconnect the correct wire, you could set off the alarms.     
      </p>
      <p ><button class="button" style="vertical-align:middle" id="enemy_base"><span><a href="shadows.php">Dash in the shadows</a></span></button></p>
      <p ><button class="button" style="vertical-align:middle" id="enemy_base"><span><a href="cables.php">Mess with the cables</a></span></button></p>

    </div> 
    <img src="Game images/enemy_base_1_floor_1.png" class="map">   
    

</body>
</html>