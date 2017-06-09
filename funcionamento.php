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
	
		
	
	
</head>
<body>
        <!-- CABEÇALHO --> 
        <header class="cabecalho container">
           <a href="index.php"><h1 class="logo"> Smarket </h1></a>
           <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
           <nav class="menu">
               <a class="btn-close"><i class="fa fa-times"></i></a>
               <ul  style="background-color:#EEE9E9;">
                   <li><a href="index.php">Home</a></li>
                   <li><a href="cadastroestabelecimento.php">Cadastre seu Mercado</a></li>
                   <li><a href="contato.php">Contato</a></li>
               </ul>
           </nav>          
        </header>
		

<!-- BANNER --> 
    <div class="banne container2">

            <div class="title">
                <h2 style="color:#1E90FF"> FUNCIONAMENTO </h2>
				
		<?php
  include("config/conexao.php");   
$txt = "select * from conteudo";
$sqlf = mysql_query ($txt);

while ($dadosf = mysql_fetch_object($sqlf)){

	print $dadosf -> texto;
	print "<br>";
}

?>
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
    </body>
</html>

		</body>

</html>