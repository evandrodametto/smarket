<?php
  session_start();
 
  $cesta = $_SESSION["cesta"];
	 $tam = count($cesta);
	 
	 
	 
	 $nome= $_SESSION['nome'];
	  $ende= $_SESSION["ende"];
	   $numero= $_SESSION["numero"];
	    $bairro= $_SESSION["bairro"];
         $id= $_SESSION["id"];
           $mercado= $_SESSION["mercado"];
			$fret = $_SESSION['frete'];
 ?>
 <?php
     $total=0;
     for($i=0; $i < $tam; $i++) { ?>
  <tr>
   
    
    <td align="center"> <?php
	    $subtotal = $cesta[$i]["QTD"] * $cesta[$i]["PRECO"];
		$total = $total + $subtotal+$fret;
	  ?></td>
  </tr>
  <?php } ?>
  <?php
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');
// prints something like: 2000-07-01T00:00:00+00:00
$data= date(DATE_ATOM, mktime());
$hora= date("H:i:s");
?>
  
<?php
	include("config/conexao.php");
	 //include("config/verifica.php");
	 	 
	 $query = "insert into pagcartao (nome,id_usuario,id_mercado, ed, n, ba, total, troco, tipo_pag, data,horario) values ('$nome','$id','$mercado','$ende', '$numero', '$bairro','$total','$total','cartao','$data','$hora')";
	 
	 $grava = mysql_query($query);
	 //echo mysql_error();
	$num_linha = mysql_affected_rows();

	if($grava)
		header("Location: pedidofinalizadoc.php");
?>