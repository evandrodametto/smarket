<?php
$email     = $_POST['email']; // Aqui recebe o email preechido no formulário
$subject = "Confirmação de cadastro no site DCS"; // Aqui é o assunto que você quiser
$message = "mensagem, mensagem"; // Aqui é a mensagem que você quer enviar. Pode digitar o que quiser
$headers .= "To: $nome <$email>" . "\r\n";  // Aqui é o cabeçalho do Email. Aqui aparece o nome e o email preechido no formulário
$headers .= "From: Danilo DCS <email@email.com.br>" . "\r\n"; // Aqui você pode colocar o seu email
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n"; // Aqui você nao muda nada
mail($email, $subject, $message, $headers); // Essa é a linha que faz a mágica toda :)
?>
