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
<body onload="show('Witty',2,wall_breach,gates,a)">
    

	<p id="title">The Sarge</p>
	<div id="story" >
    
      <p>Your squad reaches the wall, but you realize there is no way to climb it.</p>
      <p id="wall_breach"> Leonardo points towards the wall, and shows you a a spot where a lazy builder did not reinforce the wall as he should. You both take out the plastic explosives that you were carrying, dig a hole beside the wall, plant the bombs on the base of the wall and put the dirt back in. the explosion is muffled by the dirt, and creates a hole big enough for one man to crawl through.

      <p ><button class="button" style="vertical-align:middle" id="enemy_base"><span><a href="enemy_base.php">Enter the base</a></span></button></p>

      </p>

    

    <p id = "gates"><button class="button" style="vertical-align:middle" id="front"><span><a href="front_entrance.php">Go towards the front entrance</a></span></button>    
    <button class="button" style="vertical-align:middle" id="back"><span><a href="back_entrance.php">Go towards the back entrance</a></span></button></p>
  </div>
  <img src="Game images/enemy_base_1_floor.png" class="map">  
    <script>
      
      var a= " <?php echo $_SESSION['MO']; ?>"; 
      
    </script>

</body>
</html>