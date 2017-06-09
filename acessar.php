<?php
  session_start();
 ?>
<html>
  <head>

<script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>

<link rel="shortcut icon" href="img/logo1.png" type="image/x-icon">
	 <script src="jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="jquery.js"></script> 
	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> Smarket </title>
    	<link rel="stylesheet" href="css/style1.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    	<link rel="icon" href="img/icon.png">
		<!-- SCRIPT PARA PUXAR  O JGUERY QUE ESTA POSTADO NO SERVIDOR DA GOOGLE -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src=""></script>

<img src="img/amais.png" id="btnAumentar" height="25" width="25">
<img src="img/amenos.png" id="btnDiminuir" height="25" width="25">
	
	
  </head>
  <body>
  <div id="SITE">
      <header class="cabecalho container">
           <a href="index.php"><h1 class="logo"> Smarket </h1></a>
           <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
           <nav class="menu">
               <a class="btn-close"><i class="fa fa-times"></i></a>
               <ul>
                   <li><a href="index.php">Home</a></li>
                   <li><a href="cadastroestabelecimento.php">Cadastre seu Mercado</a></li>
                   <li><a href="contato.php">Contato</a></li>
               </ul>
           </nav>          
        </header>
		

		<div class="banne container2">
	<a href="painel.php">CLIQUE AQUI PARA ACESSAR PAINEL</a><br><br><br><br>
 ESCOLHA SEU ESTADO E SUA CIDADE PARA COMPRAR
	
<?php
     
	 
	  include("estadosecidade.php");



?>
</div>
		 
		 
		 
		 
		 
		 
		 <!-- NEWSLETTER1 -->
		
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
		
        
        <!-- JQUERY --> 
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>
        $(".btn-menu").click(function(){
          $(".menu").show();
        });
        $(".btn-close").click(function(){
          $(".menu").hide();
        });
        </script>      
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
	



	
	
