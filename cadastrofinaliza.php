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
    	<link href='http://fonts.googleapis.com/css?family=OpenSans:300,400,700' rel='stylesheet' type='text/css'>
        <link href="css/from.css" rel="stylesheet" type="text/css"/>
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
               <ul style="background-color:#EEE9E9;">
                   <li><a href="index.php">Home</a></li>
                   <li><a href="cadastroestabelecimento.php">Cadastre seu Mercado</a></li>
                   <li><a href="contato.php">Contato</a></li>
               </ul>
           </nav>          
        </header>
		
	
	<div id="col1">
		<div class="banneersr container2">
<center>	
<section>
        
    	 <div class="formulario">  	
<form action="cadclientefinaliza.php" method="post">

<label> NOME COMPLETO  : </label>
<input type="text" name="nome" class="g"><p>

<label>CPF : </label>
<input type="text" name="cpf" class="g"><p>

<label> CEP : </label>
<input type="text" name="cep" class="g"><p>

<label> ENDEREÇO   :</label>
<input type="text" name="ende" class="g"><p>

 
<label> BAIRRO   : </label>
<input type="text" name="bairro" class="g"><p>

<label> NUMERO   : </label>
<input type="text" name="numero" class="g"><p>

 
<label> TELEFONE DE CONTATO  : </label>
<input type="text"  name="telefone" maxlength="12" OnKeyPress="formatar('## ####-####', this)" class="g"> <p>
<label> E-MAIL  :</label>
<input type="text" name="email" class="g"><p>
<label>DIGITE SEU LOGIN :</label>
 <input type="text" name="login" placeholder="Digite seu login" class="g" > <p>
		 

<label> DIGITE SUA SENHA:</label>
<input type="password" name="senha" placeholder="Digite sua senha" class="g"><p>
<br><br><br>


</a><input type="image" class="botao" src="img\cadastrar.png" class="g" style="border:0px">  
</form>
</div>

 	</div><!--/formulario-->
                
    </section>


    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	 <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>


		 
		 
		 
		 
		 
		 
		 <!-- NEWSLETTER1 -->
		
		<?php
     
	 
	  include("rodapesite.php");



?>
        
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