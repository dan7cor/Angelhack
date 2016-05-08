<?php
session_start();
$_SESSION["MO"]=$_POST['post_mo'];
$_SESSION["soldiers"][0]=0;
$_SESSION["soldiers"][1]=0;
if($_SESSION["soldiers"][0]==0){
	$_SESSION["soldiers"][0]=$_POST['post_sol'];
}
else if($_SESSION["soldiers"][1]==0){
	$_SESSION["soldiers"][1]=$_POST['post_sol'];
}
?>