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
    
      <p>You head towards the door but you can see the guards near the front entrance. Lucky for you, the patrol guards are not near them, so you send Hush 
      Closer to them, as you and Leonardo put the silencer on your hand guns. A few shots later and with the bodies hidden, you cautiously aproach the door</p>
      <p>Since intel says that there is a guard behind that door, you have 2 choices
        <ul>
          <ol><b>breach the door</b> or</ol>
          <ol><b>Signal him from outside hoping he opens the door.</b></ol>
        </ul></p>
        <button style="vertical-align:middle" id="ff1" onclick="killDoorGuard()"><span>Breach</span></button>
        <button style="vertical-align:middle" id="ff2" onclick="killDoorGuard()"><span>Signal</span></button>

        <p style="display:none">You plant plasic explosives on the door. The blast kills the guard, but every guard knows where you are. It is a race 
          against time.</p>
        <p style="display:none" id="knock">You give a knock on the door and say "hey man". After a few seconds, the door opens, unluckily for the guard, as john 
          makes quick work of him without any sound.<br><br>
          Your team enters and the silencers quickly get rid of the nearby guards. Now, rush the stairs or wait for the patrol? 
            Thinning the ranks is always good but every second that passes makes the radio silence that much obvius.
        </p>
        <p> </p>
      <p style="display:none" id="pff1"><button class="button" style="vertical-align:middle" id="enemy_base"><span><a href="stairs.php">To the stairs!</a></span></button></p>
      <p style="display:none" id="pff2"><button class="button" style="vertical-align:middle" id="enemy_base"><span><a href="patrol.php">Wait for the patrol</a></span></button></p>

    </div>  
    <img src="Game images/enemy_base_1_floor_3.png" class="map" id="floor_map">  
    <img src="Game images/enemy_base_1_floor_4.png" class="map" style="display:none" id="signal_map">  
    <script type="text/javascript">
      function killDoorGuard(){
        document.getElementById("ff1").style.display='none';
        document.getElementById("ff2").style.display='none';
        document.getElementById("pff1").style.display='inline';
        document.getElementById("pff2").style.display='inline';
        document.getElementById("knock").style.display='inline';
        document.getElementById("floor_map").style.display='none';
        document.getElementById("signal_map").style.display='inline';
      }
    </script>

</body>
</html>