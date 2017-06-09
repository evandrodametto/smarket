<?php

  $grupo = $_GET['id'];

 session_start();
  if ($grupo == 1){
		   $_SESSION["grupo"]=$grupo;
		   header("Location: mercados.php");
		   exit;
		   
	   }else if ($grupo == 2){
		   $_SESSION["grupo"]=$grupo;
		   header("Location: mercados.php");
		   exit;
	   }else {
		   $_SESSION["grupo"]=$grupo;
		   header("Location: mercados.php");
		   exit;
	   }
 
 
?>