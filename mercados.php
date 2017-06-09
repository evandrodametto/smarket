
<?php
  session_start();
  include("config/conexao.php");
  $cod=$_SESSION["grupo"];
  $_SESSION["cidade"] = $_POST["cod_cidades"];
  $cidade=$_SESSION["cidade"];
 ?>

		
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
		<link rel="stylesheet" href="css/produtos.css">
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
		   <td>Seja Bem Vindo, <?php include ("verificanome.php"); ?></td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		</tr>
		</table>
		</div>
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
		
	</div>
	<div id="col1">
	<div id="SITE">
		<div class="banne container2">
<a href="index.php"> <img src="img/voltar.png"  border="0" align="left" /></a> <br><br>

<center><h2>Escolha o Supermercado de sua Preferência!</h2></center>
<?php

include("config/conexao.php");
 $txt = "select distinct cidade_atua.*, mercados.nome, mercados.id, mercados.situacao from cidade_atua, mercados where id_cidade='$cidade' and mercados.id = cidade_atua.id_mercado and situacao=1"; 
   $sql = mysql_query($txt);

   
   
   while($d = mysql_fetch_object($sql)) { 


 ?>
<div style="margin-left: 35px;">
<div id="box" style="background-color:#f2f2f2; border: 1px solid #c1bdbd; margin-left: 35px;">

 <?php 
	  echo substr ($d->nome,0,50);
	  ?>
      <br><br>
	      <?php
	    $txt = "select * from fotosm where idmercado=$d->id order by id ASC LIMIT 1"; 
        $sqlf = mysql_query($txt);
		$foto = mysql_fetch_object($sqlf);
		

	 ?>
     
     <a href="smercado.php?id=<?php echo $d->id;?>"><img src="adm_mercado/fotos/<?php echo $foto->foto; ?>" width="150" height="100" border="0" onMouseOver="aumenta(this)" onMouseOut="diminui(this)"/></a><br>

      
	  <br>
	  
      </a>
      <BR /><BR />
 <a href="smercado.php?id=<?php echo $d->id;?>"><img src="img/selecionar.png" width="50%"></a> </div></div>
 <?php } ?>
<br><br>
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