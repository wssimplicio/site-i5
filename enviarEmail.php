<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "wagner.simplicio@vrsoft.com.br";
//2 - resgatar os campos preenchidos no formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$texto = $_POST['message'];
//3 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>".$nome . "<br> <strong>Telefone:  </strong>".$telefone;
$mensagem .= "<br>  <strong>Mensagem: </strong>".$texto;
//4 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
//mostra quem enviou e seguido do e-mail
$headers .= "From:  $nome<$email>\n"; 
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <sistema@dominio.com.br>\n"; 
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";
 
mail($para, $email, $mensagem, $headers);  //função que faz o envio do email.

echo "E-mail enviado!";

?>

