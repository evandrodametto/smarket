<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> Smarket </title>
    	<link rel="stylesheet" href="css/style1.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
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
        <!-- CABEÇALHO --> 
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
		

<!-- BANNER --> 
    <div class="banne container2">

            <center><h1>ENTRE EM CONTATO:</h1></center><BR><BR>
<?php { ?>

<form action="cadcontato.php" method="post">
 	<section>
        
    	 <div class="formulario">  
 <label>SEU NOME  :  </label>
<input type="text" name="nome" class="g"> <p>

 
<label>SEU E-MAIL   :  </label>
<input type="text" name="email" class="g"><p>

 
 <label>SEU TELEFONE  :  </label>
<input type="text" name="telefone" class="g"><p>

 <label>SUAS DUVIDAS   :  </label>
<textarea name="mensagem" cols="52" rows="5" class="g"></textarea><p>

<label><input type="image" class="botao" src="img\enviar.png" style="border:0px">  </label> <p>




</form>
    	</div><!--/formulario-->
                
    </section>


    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	 <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>


<?php } ?>
        </div>
		
       
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