<?php
      session_start();
      
      include("config/conexao.php");
      
      $txt = "select * from produtos where id=$_GET[id]";
      $sql = mysql_query($txt);
      $d = mysql_fetch_object($sql);
      
      $cesta = @$_SESSION["cesta"];
	  $tt = @$_SESSION["tcarrinho"];
	  $pos = -1;
      
      $tam = count($cesta);
      
     
	  for($j=0; $j < $tam; $j++) {
		  
		  if ($d->id == $cesta[$j]["CODIGO"]) {
			  
			  $pos = $j;
			  break;
			  
		  }
		  
	  }
	  

	 
	 if ($pos != -1) {
	
		 $i=$pos;
		 $cesta[$i]["QTD"] = $cesta[$i]["QTD"] + 1;
		 $tt = $tt + $cesta[$i]["QTD"];
		 
	 } else {
		 
	  
         $i=$tam;
		 $cesta[$i]["CODIGO"] = $d->id;
		 $cesta[$i]["PRODUTO"] = $d->titulo;
		 $cesta[$i]["PRECO"] = $d->preco;
		 $cesta[$i]["QTD"] = $_POST["qtdee"];
		 $tt = $tt + $cesta[$i]["QTD"];
      
     } 
    

       $_SESSION["cesta"] = $cesta;
	   $_SESSION["tcarrinho"] = $tt;
       
       header("location: produtos.php");
       exit;



?>