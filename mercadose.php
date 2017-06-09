<?php
     session_start();
     $_SESSION["cidade"]= $mercado;
	 
	unset ($_SESSION["cesta"]);
	if ($mercado == 1){
		   $_SESSION["mercado"]=$mercado;
		   header("Location: mercados.php");
		   exit;
		   
	   }else if ($mercado == 2){
		   $_SESSION["mercado"]=$mercado;
		   header("Location: mercados.php");
		   exit;
	   }else {
		   $_SESSION["mercado"]=$mercado;
		   header("Location: mercados.php");
		   exit;
	   }
	 
	 header("Location: mercados.php");
	 exit;

?> 