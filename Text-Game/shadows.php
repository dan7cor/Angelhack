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
    
      <p>You hug the shadows and point the way for your team, hoping that the enemy patrols don't see your shadows.
      You manage to reach the door to the base, no one has seen you yet but that will change very soon.</p>
      <p>Now, you are in the first floor of the base, as seen by the map, you can start cleaning up soldiers so if the alarms should go off, 
        you would need to fight less soldiers or you can dash straight to the stairs, prioritizing speed in blowing up the batteries.</p>
      <p ><button class="button" style="vertical-align:middle" id="enemy_base"><span><a href="underground.php">To the stairs!</a></span></button></p>
      <p ><button class="button" style="vertical-align:middle" id="enemy_base"><span><a href="first_floor.php">Clean up</a></span></button></p>

    </div>  
    

</body>
</html>