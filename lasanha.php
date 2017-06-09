
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

<?php
include("config/conexao.php");
 $txt = "select * from produtos where subcategoria='LASANHA' and id_mercado=$mer"; 
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
     <img src="adm_mercado/fotos/<?php echo $foto->foto; ?>" width="150" height="100" border="0"/><br>
	 <?php 
	 echo "R$ ";
	     echo substr($d->preco,0,50);
		 
	  ?>
      
	  <br>
	  
      </a>
      
 
	  <BR />
	<form action="carrinho.php?id=<?php echo $d->id;?>" name="f<?php echo $d->titulo; ?>" method="post">Quantidade<br>
	 <input type="number" name="qtdee"  value="1" class="qtde" min="1" ng-attr-max="{{ limite }}" tg-botao-adicionar-qtde="" max="10" >
	<br><br>
   <input type="image" src="img/adc_carrinho.png" width="90%"/>
   </form> 
	</div>
	<!--<div class="group">  <button class="less" tg-botao-adicionar-less="">-</button>  <input type="number" class="qtde" min="0" ng-attr-max="{{ limite }}" tg-botao-adicionar-qtde="" max="11">  <button class="more" tg-botao-adicionar-more="">+</button></div>
      <input type="text" style="width: 35px;" value="1" name="qtdee" id="mudeValor" />
	  -->
 <?php } ?>
            
               </div>
            

 <div class="servicos container2">

 </div>
 		<?php
     
	 
	  include("rodapesite.php");



?>
        </section>
          </div>
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