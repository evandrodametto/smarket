
<?php
	include("config/conexao.php");
	 //include("config/verifica.php");
	 	 
	 $query = "insert into mercados (nome, cnpj, cep, endmercado, bairromercado, nummercado, telefone, rmercado, rcpf, remail, rtele, login, senha) values ('$_POST[nome]', '$_POST[cnpj]', '$_POST[cep]', '$_POST[endmercado]', '$_POST[bairromercado]', '$_POST[nummercado]', '$_POST[telefone]', '$_POST[rmercado]', '$_POST[rcpf]', '$_POST[remail]', '$_POST[rtele]', '$_POST[login]', '$_POST[senha]')";
	 $grava = mysql_query($query);
	 //echo mysql_error();
	$num_linha = mysql_affected_rows();

	if($grava)
{
    echo "Cadastro Efetuado com sucesso, Um E-mail Com Mais Informações Será Enviado à você<br>";
} 
else 
{
    echo "Ocorreu um erro, Tente novamente!<br><br>";
}

	 

?>

 <br><br><br><br><center><a href="index.php"><img src="img/voltar_index.png"></a></center>
