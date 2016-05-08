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
<body>
    

	<p id="title">The Sarge</p>
	<div id="story" >
    
      <p>You descend the stairs quietly, your trusty silencer does his job and the guards on the stairs are done for.</p>
      <p>You walk towards the room, fire away. It wipes out all the guards in the room</p>
      <p>As your team cleans up the remaining 3 guards on the underground floor, you destroy the battery</p>
      <p>It's done, you need to escape <b>NOW</b></p>
      <p><button class="button" style="vertical-align:middle" id="enemy_base"><span><a href="escape.php">RUN</a></span></button></p>
      
    </div>  
    <img src="Game images/enemy_base_underground_floor_1.png" class="map">  
    
    

</body>
</html>