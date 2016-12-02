<html> 
<body> 
 
<form action="" method="POST"> 
Seu nome: <input type="text" name="nome"><br> 
Seu e-mail: <input type="text" name="email"><br>
Sua matricula:<input type="text" name = "matricula"/>
Comentários: <textarea name="mensagem"></textarea><br> 
<input type="submit" value="Enviar"> 
</form>
<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $matricula = $_POST['matricula'];
  $mensagem= $_POST['mensagem'];
  $corpoEmail ="Mensagem de: ".$email."\r\n"."Matricula:".$matricula."\r\n"."Mensagem:\r\n". $mensagem ;
  $arroba = strripos($nome, 'a');
  if($arroba == FALSE && isset($email)){
	echo "Formato de email invalido";
  }	
  $to = "bernardonlignati@gmail.com";
  $assunto = "Contato ABRASETE";
  mail($to,$assunto,$corpoEmail);
?>
 
</body> 
</html>

