<!doctype html>
<?php
session_start();
$_SESSION["MO"];
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
	<div id="story">

		<p>Soldier, your time spent training has not been in vain, we have bent the rules a little and have promoted you to first Sargent.</p>
    	<p>You will have in your command a small team, with whom you will have to finish the mission we will give you.</p>
    	<p>But first, you were trained in one of the branches of our military, and I need you to remember your training, since this will determine the modus operandi of your squad.</p>
        <p>There are 3 branches in which we are trained to operate: Stealth, Bellicose and Witty. In which one did you train in?</p>
        <div class="dropdown">
  			<button onclick="myFunction()" class="dropbtn">Remember your training</button>
  				<div id="myDropdown" class="dropdown-content">
    				<a onclick="assing_MO('player.MO', 1);">Stealth</a>
    				<a onclick="assing_MO('player.MO', 2);">Bellicose</a>
    				<a onclick="assing_MO('player.MO', 3);">Witty</a>
  				</div>
		</div>
        <div id="MO1">
        	<p>Stealth: You were trained in the shadows of the Covert Ops, you live by the words "silence is golden".</p>
        </div>
        <div id="MO2">
        	<p>Bellicose: You were thrown to the lions and came back wearing their pelt, for you everything is a target.</p>
        </div>
        <div id="MO3">
        	<p>Witty: Master of the applied sciences, your motto is "There is always a better way".</p>
        </div>

        <p id="Final" > When you are ready, we will brief you on your mission</p>
        <p><button class="button" style="vertical-align:middle" id="mission_button" ><span><a href="mission.php">The mission</a></span></button></p>
    </div>
    <script type="text/javascript">
      

      function go_ajax(a){
        //console.log(a);
        var mo_value = a;
        $.post('tools/validate.php',{post_mo:mo_value},function(){});

      }
    </script>


</body>
</html>