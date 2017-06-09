		<!-- SCRIPT PARA PUXAR  O JGUERY QUE ESTA POSTADO NO SERVIDOR DA GOOGLE -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src=""></script>

<img src="img/amais.png" id="btnAumentar" height="25" width="25">
<img src="img/amenos.png" id="btnDiminuir" height="25" width="25">
	
<link rel="stylesheet" href="css/produtos.css">
<div id="SITE">
<?php
     
	 
	  include("topoprodutos.php");



?>

 <div class="banne container">
            

 <form method="POST" action="pesquisar.php">
  <center><input type="text" name="pesquisar" size="80">
  <input type="submit" value="Buscar" name="buscar"></center>
</form>
<br><br><br>
<?php 
include("config/conexao.php");
$txt = "select * from produtos where id=$_GET[id]"; 
   $sql = mysql_query($txt);
   $d = mysql_fetch_object($sql); 


?>
<div id="fotod">
     <?php
	    $txt = "select * from fotosp where idproduto=$d->id order by id ASC LIMIT 1"; 
        $sqlf = mysql_query($txt);
		$foto = mysql_fetch_object($sqlf);
	 ?>
     
     <img src="adm_mercado/fotos/<?php echo $foto->foto; ?>" width="320" border="0" />
     
       <?php
	    $txt = "select * from fotosp where idproduto=$d->id order by id ASC"; 
        $sqlf = mysql_query($txt);
		while($foto = mysql_fetch_object($sqlf)) {
	 ?>
     
     <?php } ?>
      </div>
      
 <div id="desc"> 
   <font style="font-size: 24px; font-weight: bold;"><?php echo $d->titulo; ?></font><BR /><BR />
     <font style="font-size: 20px; font-weight: bold;">R$<?php echo number_format($d->preco,2,",","."); ?></font><BR /><BR />
     <?php echo nl2br($d->descricao); ?><BR />  <BR /><BR />
	 <a href="produtos2.php"> <img src="img/voltar.png"  border="0" /></a>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="carrinho.php?id=<?php echo $d->id;?>"><img src="img/comprar.png"  border="0" /></a> 

</div>

            
               </div>
            

 
 		<?php
     
	 
	  include("rodapesite.php");



?>
        </section>
          
<!-- SCRIPT PARA FUNCIONAR O AUMENTO DA LEVRA E DIMINUIR  -->
    <script type="text/javascript">
        var $btnAumentar = $("#btnAumentar");
var $btnDiminuir = $("#btnDiminuir");
var $elemento = $("body #SITE").find("*"); //encontra todos os elementos dentro do #SITE
var fonts = [];

function obterTamanhoFonte() {
  for (var i = 0; i < $elemento.length; i++) {
    fonts.push(parseFloat($elemento.eq(i).css('font-size')));
  }
}
obterTamanhoFonte();
$btnAumentar.on('click', function() {
  for (var i = 0; i < $elemento.length; i++) {
    ++fonts[i];
    $elemento.eq(i).css('font-size', fonts[i]);
  }
});

$btnDiminuir.on('click', function() {
  for (var i = 0; i < $elemento.length; i++) {
    --fonts[i];
    $elemento.eq(i).css('font-size', fonts[i]);
  }
});
    </script>
</body>
</html>