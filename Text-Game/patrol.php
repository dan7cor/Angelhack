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
    
      <p>You take your time, you know the less soldiers there are now, the less you will have to fight in the escape. you manage to finish 2 of the 3 patrol.
      </p>
      <p>You are moments from being caught, but now is the time, on the first floor there are less than half the guards left.</p>
      <p>Lets finish this. You aproach the stairs, the guard could not even scream before he died.</p>
      <p>Go down quietly or go down guns blazing, in the end is the final part of the mission.</p>
      <p>                          <button class="button" style="vertical-align:middle" id="enemy_base"><span><a href="guns.php">Go Guns on fire</a></span></button>
      <button class="button" style="vertical-align:middle" id="enemy_base"><span><a href="quiet.php">Silently</a></span></button></p>

    </div> 
    <img src="Game images/enemy_base_1_floor_5.png" class="map" style="right: 1300px"> 
    <img src="Game images/enemy_base_underground_floor.png" class="map">  
    

</body>
</html>