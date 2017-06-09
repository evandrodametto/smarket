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
 $txt = "select * from produtos where subcategoria='AMENDOIM E CIA' and id_mercado=$mer"; 
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
     <img src="adm/fotos/<?php echo $foto->foto; ?>" width="150" height="100" border="0"/><br>
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
            </div>

 <div class="servicos container2">

 </div>
 <section class="newsletter container bg-black">
         <main class="servicos bg-red">
            <article class="servico bg-red ">
               <div class="inner">
				<p><h3>INSTITUCIONAL</h3></p>
                   <a href="sobrenos.php"><font color='white'>-Sobre nós </font></a><br>
				   <a href="funcionamento.php"><font color='white'>-Como funciona </font></a><br>
            
               </div>
            </article
			<section class="newsletter container bg-black">
            <article class="servico bg-red">
               
               <div class="inner">
			   <p><h3> POLÍTICAS</h3></p>
                   <a href="politicadeprivacidade.php"><font color='white'>-Política de Privacidade </font></a><br>
				   <a href="politicadosite"><font color='white'>-Política do site </font></a><br>
               </div>
            </article>
            <article class="servico bg-red">
              
               <div class="inner">
			   
                  <p><h3><font color='white'>ATENDIMENTO</font></h3></p>
				  <a href="contato.php"><img src="img/supp.png" width="100"></a>

               </div>
            </article>
			</section>
			 <!-- NEWSLETTER2 -->
        <section class="newsletter container bg-green">
           <h2> Cadastra-se agora! </h2>
           <h3>  Receba novidades, promoções e descontos!</h3>
           <form>
              <input class="bg-whi radius" type="email" name="email" placeholder="Seu email">
              <button class="bg-white radius"> Cadastrar </button>
           </form>
        </section>
        <!-- RODAPÉ -->
        <footer class="rodape container3 bg-gradient">
          <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
          </div>
          <p class="copyright">
            Copyright © Smarket 2016. Todos os direitos reservados.
        </footer>             
    </body>
</html>

		</body>

</html>
	
</body>
</html>