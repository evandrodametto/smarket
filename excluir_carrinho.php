<?php
      session_start();
      
       $i = $_GET["indice"];
	   $cesta = $_SESSION["cesta"];
	   
	   unset($cesta[$i]);
	   $cesta = array_values($cesta);
    

       $_SESSION["cesta"] = $cesta;
	   
       
       header("location: vercarrinho.php");
       exit;



?>
