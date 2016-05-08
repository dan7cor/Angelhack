
//
// Game Mechanics
//

// MO = Modus Operandi
var player ={
  MO         : 0,
  squad_size : 0,
  squad      : []

}

//check if the MO has been changed or not, for the 
var flag = false;

// CC = Close Combat
// LRW = Long Range Weapons 
// SRW = Short Range Weapons

var s1 ={
  key        : "s1",
  Name       : "John Hush",
  MO         : "Stealth"/*,
  CC         : 3,
  LRW        : 1,
  SRW        : 2*/

}

var s2 ={
  key        : "s2",
  Name       : "Ragnar Warmonger",
  MO         : "Bellicose"/*,
  CC         : 2,
  LRW        : 1,
  SRW        : 3*/
}

var s3 ={
  key        : "s3",
  Name       : "Leonardo Finn",
  MO         : "Witty"/*,
  CC         : 1,
  LRW        : 3,
  SRW        : 2*/
}

var soldiers = [s1,s2,s3];

/* Function to assign the Modus Operandi for the player in the Sarge.html page*/

function assing_MO(a,b){
  if(b==1){
    a = "Stealth";
    document.getElementById("MO1").style.display="inline";
    document.getElementById("MO2").style.display="none";
    document.getElementById("MO3").style.display="none";
    document.getElementById("Final").style.display="inline";
    document.getElementById("mission_button").style.display="inline";    
  } 
  else if(b==2){
    a = "Bellicose"; 
    document.getElementById("MO2").style.display="inline";
    document.getElementById("MO1").style.display="none";
    document.getElementById("MO3").style.display="none";
    document.getElementById("Final").style.display="inline";
    document.getElementById("mission_button").style.display="inline";
  }
  else if(b==3){
    a = "Witty";
    document.getElementById("MO3").style.display="inline";
    document.getElementById("MO2").style.display="none";
    document.getElementById("MO1").style.display="none";
    document.getElementById("Final").style.display="inline";
    document.getElementById("mission_button").style.display="inline";
  }
  go_ajax(a);
  
}

/* When the user clicks on the button, toggle between hiding and showing the dropdown content */
		function myFunction() {
    		document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown menu if the user clicks outside of it
		window.onclick = function(event) {
 	 		if (!event.target.matches('.dropbtn')) {

    			var dropdowns = document.getElementsByClassName("dropdown-content");
    			var i;
    			for (i = 0; i < dropdowns.length; i++) {
      				var openDropdown = dropdowns[i];
      				if (openDropdown.classList.contains('show')) {
        				openDropdown.classList.remove('show');
      				}
    			}
  			}
		}

/* hover function for covering the barracks button on mission page*/

function coverOnHover(a){
  document.getElementsById(a).style.display="none";
}

/* Make the soldier list */

//shows the soldiers that can be recruited and the different actions you can do with them on camp

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
      console.log(player.squad);
      player.squad_size++; 
      var para = document.createElement("li");   
      para.setAttribute('id',"li"+sol.key);                  
      var t = document.createTextNode(sol.Name);      
      para.appendChild(t);                                        
      document.getElementById("squad").appendChild(para);
      add_soldier_ajax(sol);
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

/* Make the functions that decide what portion of the story we will tell*/

function show(a,b,c,d,e){
  var p = document.getElementById(c);
  var k = document.getElementById(d);
  if(b==2){
    if(e == a){ /*&& (player.squad[0].MO == a|| player.squad[1].MO == a))*/
      console.log("debug");
      p.style.display='inline';
      k.style.display='none';
    }

  }
  
}

