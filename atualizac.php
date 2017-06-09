<?php
    session_start();
      
		$i = $_GET["indice"];
	    $cesta = $_SESSION["cesta"];
	   
	    $cesta[$i]["QTD"] = $_POST["qtde"];
    

        $_SESSION["cesta"] = $cesta;
	   
       
       header("location: vercarrinho.php");
       exit;



?>
