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
		 <link href='http://fonts.googleapis.com/css?family=OpenSans:300,400,700' rel='stylesheet' type='text/css'>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
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
		<div class="banner container2">
 <?php
		    if (@$_GET["erro"] == 1) {
				echo "Usuário não cadastrado!<BR>";
			} else if (@$_GET["erro"] == 2) {
				echo "Sua senha está inválida!<BR>";
			}  else if (@$_GET["erro"] == 3) {
				echo "Você precisa estar logado para acessar o sistema<BR>";
			}
		 ?>
		 <center><section><form action="valida.php" method="post"  style="background-color:rgba(255, 255, 255, 0.7); width:400px; borde:200px; border-radius: 10px; ">
		 <label> Digite seu Login: </label>
	        <input type="text" placeholder="Digite seu login" name="u" alt="digite o seu usuario"> <BR><BR>
		   <label>Digite sua Senha:</label>
		   <input type="password" placeholder="Digite sua senha" name="s">
		   <br><br><br>
		   <p><input type="image" class="botao" src="img/entrar2.png">
		 </form>
		     	</div><!--/formulario-->
                
    </section>


    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
</center>
		 </div>
		 <br>
		 
		 
		 
		 
		 
		 
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