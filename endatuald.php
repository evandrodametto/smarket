	<label> SEU NOME : </label>
		<input type="text" value="<?php echo $_SESSION["nome"]; ?>" name="nome" ><p>
	
		<label> SEU ENDEREÇO : </label>
		 <input type="text" value="<?php echo ($ed);?>" name="ende" ><p>
	
		<label> NUMERO DA CASA: </label>
	 <input type="text" value="<?php echo ($n);?>" name="numero" ><p>
	
		<label> SEU BAIRRO </label>
		 <input type="text" value="<?php echo ($ba);?>" name="bairro" ><p>
	 
		<label> Frete </label>
	 <input type="text" value="<?php $fret = $_SESSION['frete']; echo ($fret); ?>" style="cursor: not-allowed;" readonly>  <p>

 <?php
     $total=0;
     for($i=0; $i < $tam; $i++) { ?>
  <tr>
 <label> <?php
	    $subtotal = $cesta[$i]["QTD"] * $cesta[$i]["PRECO"];
		$total = $total + $subtotal +$fret;;
	  ?></label><p>
 
  <?php } ?>

<label> Valor Total: 
R$ <?php echo number_format($total,2,",",".");?><p>

	<label><a href="pagdinheiro.php"><img src="img/finalizarcompra.png"  /><label><br><br>