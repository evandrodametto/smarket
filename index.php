
<script>
    function cor(cores){
            $("body").css("background-color", cores);   
		
			$("h2").css("color", "white");
				$("h3").css("color", "white");
				
				
    
	}
</script>
<a href="javascript:void(0)" onClick="cor('black');">Black</a>



<script>
    function cor2(cores2){
            $("body").css("background-color", cores2);   
		
			$("h2").css("color", "black");
				$("h3").css("color", "black");
	}
</script>

<br />
<a href="javascript:void(0)" onClick="cor2('white');">Branco</a>





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
			   <ul>
			   </ul>
           </nav>          
        </header>
		

<!-- BANNER --> 
    <div class="banner container2">

            <div class="title">
			<div >
                <h2 style="color:#1E90FF"  > O supermercado em suas maos! </h2>
				<h3  style="color:#000000" > Entre com seu Estado e Cidade Abaixo: </h3>
				</div>
		
            </div>

            <div class="buttons">
                <a href="precadastro.php"><button class="btn btn-cadastrar bg-white radius"> Cadastrar <i class="fa fa-question-circle"></i></button></a>
                <a href="login.php"><button class="btn btn-sobre bg-black radius"> Entrar <i class="fa fa-arrow-circle-right"></i></button></a>
            </div>
			
			<div   style="background-color:rgba(255, 255, 255, 0.7); width:700px; border-width: 100px; border-style: solid; border-radius: 10px; border-color:rgba(255, 255, 255, 0.2);">
			
			<div style="color:#00000; text-width:50px; font-weight:bold;">
			<?php
	  include("estadosecidade.php");
?>
</div>
</div>
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