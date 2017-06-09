<?php
	include("config/conexao.php");
	 //include("config/verifica.php");
	 	 
	 $query = "insert into usuarios (nome, cpf, cep, ende, bairro, numero, telefone , email, login, senha) values ('$_POST[nome]', '$_POST[cpf]', '$_POST[cep]', '$_POST[ende]', '$_POST[bairro]', '$_POST[numero]', '$_POST[telefone]', '$_POST[email]', '$_POST[login]', '$_POST[senha]')";
	 $grava = mysql_query($query);
	 //echo mysql_error();
	$num_linha = mysql_affected_rows();

	if($grava)
{
    echo "Cadastro Efetuado com sucesso";
} 
else 
{
    echo "Ocorreu um erro, Tente novamente";
}

	 

?>

 <br><br><br><br><center><a href="index.php"><img src="img/voltar.png"></a></center>
