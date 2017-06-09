
<?php
  session_start();
  include ("config/conexao.php");
   $id_usuario=$_SESSION["id"];
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
		<div id="top">
			<li align="right">Seja Bem Vindo, <?php echo $_SESSION["nome"]; ?>&nbsp;&nbsp;&nbsp; <a href="sair.php"><img src="img/sair.png" width="30px" alt="sair"></a></li>
		</div>
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
			   <ul style="background-color:#9ACD32;width:90%">
        <li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 		</li>
		<li><a href="painel.php">HOME PAINEL</a></li>
		<li><a href="historico.php">HISTORICO DE COMPRAS</a>
			</li>    
		<li><a href="painelinformacoes.php">INFORMACOES DE CADASTRO </a></li>		
</ul>
           </nav>          
        </header>
		
	

		<div class="banne container2">

		
<center><h1>HISTÓRICO DE COMPRAS</h1></center>

<?php
  //$txt = "select situacao_pedido.id_mercado, situacao_pedido.id_pedido, situacao_pedido.situacao from situacao_pedido where situacao_pedido.id_pedido = select pagcartao.id from pagcartao where pagcartao.id_usuario =$id_usuario";
  $txt="select distinct pagcartao.tipo_pag, pagcartao.id, pagcartao.nome, pagcartao.id_mercado , pagcartao.data, pagcartao.total, pagcartao.troco, mercados.id as idm, mercados.nome as nomem from pagcartao, mercados where pagcartao.id_usuario=$id_usuario and pagcartao.id_mercado=mercados.id order by id DESC";
	  $sql = mysql_query($txt);
?>
	<?php { ?>
</br></br></br>

	
	
	
<?php while(@$dados = mysql_fetch_array($sql)) {?>
<hr>
<table width="100%" border="1" align="center">
	<tr bgcolor="7dbce1" align="center">
	<td>VISUALIZAR ANDAMENTO</td>
	
	<td>NOME DO MERCADO </td>
	<td>LISTA DE PRODUTOS</td>
	<td>DATA COMPRA</td>
	<td>TOTAL COMPRA R$</td>
	<td>TOTAL PAGO R$ </td>
	<td>TIPO PAGAMENTO </td>
	</tr>
<tr>
	
	<td align="center"><a href="visualizarandamento.php?id=<?php echo $dados["id"]; ?>" title="Visualizar"> <img src="img/lupa.png" width="16" height="16" border="0" /></a></td>
	
	<td align="center"> <?php echo $dados['nomem']; ?></td>
	<td align="center"> <a href="visualizarcompra.php?id=<?php echo $dados["id"]; ?>">VER PRODUTOS</a></td>
	<td align="center"><?php echo $dados['data']; ?></td>
	<td align="center"><?php echo $dados['total']; ?></td>
	<td align="center"><?php echo $dados['troco']; ?></td>
	<td align="center"><?php echo $dados['tipo_pag']; ?></td>
		</tr></table>
<?php }?>

<?php } ?>		
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