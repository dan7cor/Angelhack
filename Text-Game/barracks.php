<!doctype html>
<?php
session_start();
?>
<!doctype html>
<html>
<head>
   	<meta charset="UTF-8">
   	<title>Daniel Prototype</title>
   	<link rel="stylesheet" href="game.css">
    <script type="text/javascript" src="tools/jquery.js"></script>
	  <script src="sarge_mechanics.js"></script>
</head>
<body onload="soldiers.forEach(mostrar_soldados)">
	<p id="title">The Sarge</p>
	<div id="story">

		<p>Sargent,
      For this mission we have the following soldiers at your disposal to select for your team:</p>
    <div >
      <ul id="soldier_list" >
      </ul>

    </div>
    <p> Remember you can only add 2 soldiers to your squad, anymore and it would endanger the mission</p>
    <div>
      <p>your soldiers:</p>
      <ul id="squad" >
      </ul>
    </div>
    <p><button class="button" style="vertical-align:middle" id="start_button"><span><a href="start.php">Get on the plane</a></span></button></p>

  </div>  
  <script type="text/javascript"> 
    function mostrar_soldados(item) {
    S_list = document.getElementById("soldier_list");
    S_list.innerHTML = S_list.innerHTML +"<li id="+item.key+">Private <b>"+ item.Name + "</b> has an expertise in the <b>"+item.MO+"</b> branch of the army "; 
    S_list.innerHTML = S_list.innerHTML + "<button onclick='addToSquad("+item.key+");'>Add to Squad</button>"
    S_list.innerHTML = S_list.innerHTML + "    <button id='fire_"+item.MO+"' onclick='fireFromSquad("+item.key+");' >Fire</button><br></li><br>"
    //sol_button_fire = document.getElementById("fire_"+item.MO);
    //sol_button_fire.style.display = 'none';
    
  }

  function addToSquad(sol){
    if(player.squad_size<2){
      //soldier = document.getElementById("fire_"+sol.Name);
      //sol_button_fire.style.display = 'inline';
      
      player.squad.push(sol);  
      player.squad_size++; 
      var para = document.createElement("li");   
      para.setAttribute('id',"li"+sol.key);                  
      var t = document.createTextNode(sol.Name);      
      para.appendChild(t);                                        
      document.getElementById("squad").appendChild(para);
      add_soldier_ajax(sol.MO);
    }
    if(player.squad_size==2){
      document.getElementById("start_button").style.display='inline'
    }
  }

  function fireFromSquad(sol){
    if(player.squad_size>=0){
      //sol_button_fire = document.getElementById("fire_"+item.MO);
      //sol_button_fire.style.display = 'none';
      player.squad.pop();
      player.squad_size--;
      // Removing a specified element when knowing its parent node
      var d = document.getElementById("squad");
      var d_nested = document.getElementById("li"+sol.key);
      var throwawayNode = d.removeChild(d_nested);
      //document.getElementById("li"+sol.key).style.display='none';

    }
  }

  function add_soldier_ajax(a){
    var mo_value = a;
    $.post('tools/validate.php',{post_sol:mo_value},function(){});
    }
    
   
    </script>
    


</body>
</html>