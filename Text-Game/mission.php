<?php
session_start();
?>
<!doctype html>
<html>
<head>
   	<meta charset="UTF-8">
   	<title>Daniel Prototype</title>
   	<link rel="stylesheet" href="game.css">
	<script src="sarge_mechanics.js"></script>
</head>
<body>
	<p id="title">The Sarge</p>
	<div id="story">
		<p>Sargent</p>
    	<p>We need you to infiltrate an enemy base and destroy the solid state lithiom-ion batteries that are in the lower floors of the base.</p>
		<p>This implicates to infiltrate the base, destroy the batteries and escape.</p>    
		<p>Take into consideration the next points before you act:
			<ol>
        	<li>The base is in the mountains.</li>
        	<li>There are only 2 entrances to the complex.</li>
        	<li>There are stationary guards and patrols, the patrol check the status of the stationary guards.</li>
        	<li>The stationary guards are on each entrance </li>
        	<li>The stairs (marked on the map) are the connections between each floor</li>
        	<li>The batteries are on the underground floor, protected by guards</li>
		</ol></p>

		<img id="map1" src="Game images/enemy_base_1_floor.png" alt="" width="200" height="150" onhover="coverOnHover('barracks_button');">
		<img id="map2" src="Game images/enemy_base_underground_floor.png" alt="" width="200" height="150" onhover="coverOnHover('barracks_button');">
		<p><button class="button" style="vertical-align:middle" id="barracks_button"><span><a href="barracks.php">The Barracks</a></span></button></p>
    </div>  
    


</body>
</html>