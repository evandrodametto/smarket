
<?php
	include("config/conexao.php");
	 //include("config/verifica.php");
	 	 
	 $query = "insert into contato (nome, email, telefone, mensagem) values ('$_POST[nome]', '$_POST[email]', '$_POST[telefone]', '$_POST[mensagem]')";
	 $grava = mysql_query($query);
	 //echo mysql_error();
	$num_linha = mysql_affected_rows();

	if($grava)
{
    echo "Cadastro Efetuado com sucesso, Responderemos o mais Breve Possivel <br>";
} 
else 
{
    echo "Ocorreu um erro, Tente novamente!<br><br>";
}

	 

?>

 <br><br><br><br><center><a href="index.php"><img src="img/voltar_index.png"></a></center>
