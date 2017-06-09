<?php
     
	 
	  include("topoprodutos.php");



?>
 <form method="POST" action="busca.php">
  <center><input type="text" name="busca" size="80">
  <input type="submit" value="Buscar" name="ok"></center>
</form>
<?php

include("config/conexao.php");
 $txt = "select * from produtos where categoria='9' and id_mercado=$mer"; 
   $sql = mysql_query($txt);

   
   
   while($d = mysql_fetch_object($sql)) { 


 ?>

 <div id="box">

 <?php 
	     echo substr($d->titulo,0,50);
	  ?><br><br>
     <?php
	    $txt = "select * from fotosp where idproduto=$d->id order by id ASC LIMIT 1"; 
        $sqlf = mysql_query($txt);
		$foto = mysql_fetch_object($sqlf);
		

	 ?>
     <a href="detalhes.php?id=<?php echo $d->id;?>">
     <img src="adm/fotos/<?php echo $foto->foto; ?>" width="150" height="100" border="0" /><br>
	 <?php 
	 echo "R$ ";
	     echo substr($d->preco,0,50);
		 
	  ?>
      
	  <br>
	  
      </a>
      <BR /><BR />
 <a href="carrinho.php?id=<?php echo $d->id;?>"><img src="adm/img/carrinho.png" width="50" height="50" border="0" /></a> </div>
 <?php } ?>
	
	
</body>
</html>