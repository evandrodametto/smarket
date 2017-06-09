<?php 
session_start();
include("config/verifica.php"); ?>
<?php
      $id = $_SESSION["id"];
     include("config/conexao.php");
	  $txt = "update usuarios set nome='$_POST[nome]', cpf='$_POST[cpf]', cep='$_POST[cep]',  ende='$_POST[ende]', bairro='$_POST[bairro]', numero='$_POST[numero]', telefone='$_POST[telefone]', login='$_POST[login]', senha='$_POST[senha]' where id=$id";
	  mysql_query($txt);
	  header("location: painelinformacoes.php");
	  exit;
	  
	 
 
 ?>
