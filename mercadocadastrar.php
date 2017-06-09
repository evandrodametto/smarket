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
    <div class="banner12 container2">

            
 <center><meta property="og:title" content="Teste de Envio via FormMail" />
<meta property="og:locale" content="pt_br" />
<script type="text/javascript">
function hgsubmit() {
if (/\S+/.test(document.hgmailer.nome.value) == false) alert ("Por favor, digite um nome.");
else if (/^\S+@[a-z0-9_.-]+\.[a-z]{2,6}$/i.test(document.hgmailer.email.value) == false) alert ("Um endereço de e-mail válido é requerido.");
else if (/\S+/.test(document.hgmailer.mensagem.value) == false) alert ("É necessário um conteúdo para mensagem.");
else { 
document.hgmailer.submit();
alert ('Obrigado!\nSeu e-mail foi enviado com sucesso.');
}
}
</script>
</head>
<body>
<?php { ?>
<section>
       
    	 <div class="formulario">  
<form action="cadmercado.php" method="post">

 <label>NOME DO MERCADO  :  </label>
<input type="text" name="nome" class="g" ><br>

 
<label> CNPJ :  </label>
<input type="text" name="cnpj" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="g"><br>

 <label>CEP :  </label>
<input type="text" name="cep" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" class="g"><br>

 <label>ENDEREÇO DO MERCADO  : </label>
<input type="text" name="endmercado" class="g"><br>

 
<label> BAIRRO  DO MERCADO  :  </label>
<input type="text" name="bairromercado" class="g"><br>

<label> NUMERO   :  </label>
<input type="text" name="nummercado" class="g"><br>

 
 <label>TELEFONE DE CONTATO  :  </label>
<input type="text"  name="telefone" maxlength="12" OnKeyPress="formatar('## ####-####', this)" class="g"> <br>

 
 <label>NOME DO REPRESENTANTE DO MERCADO  :  </label>
<input type="text" name="rmercado" class="g" ><br>
 
<br>

<label>CPF DO REPRESENTANTE DO MERCADO  :  </label>
<input type="text" name="rcpf" class="g"> <br>

 <label>SEU E-MAIL  :  </label>
<input type="text"  name="remail" maxlength="20" OnKeyPress="formatar('## #####-####', this)" class="g"> <br>

 
 <label>TELEFONE DO REPRESENTANTE  :  </label>
<input type="text"  name="rtele" maxlength="13" OnKeyPress="formatar('## #####-####', this)" class="g"> <br>

 

<label> DIGITE SEU LOGIN : </label>
 <input type="text" name="login" placeholder="Digite seu login" class="g" > <br>
		 


 <label> DIGITE SUA SENHA: </label>
<input type="password" name="senha" placeholder="Digite sua senha" class="g"><br>

<div class="buttons">
               <button class="btn btn-sobre bg-black radius"> Cadastrar <i class="fa fa-arrow-circle-right"></i></button>
            </div>  <br>



</form>
    	</div>
		<!--/formulario-->
                
    </section>


    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

</div>

<?php } ?>
        
		
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