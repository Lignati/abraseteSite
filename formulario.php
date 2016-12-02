<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $matricula = $_POST['matricula'];
  $mensagem= $_POST['mensagem'];
  $corpoEmail ="Mensagem de: ".$email."\r\n"."Matricula:".$matricula."\r\n"."Mensagem:\r\n". $mensagem ;
  $arroba = strripos($nome, 'a');
  if($arroba == FALSE){
	echo "Formato de email invalido";
  }	
  $to = "bernardonlignati@gmail.com";
  $assunto = "Contato ABRASETE";
  mail($to,$assunto,$corpoEmail);
?>
