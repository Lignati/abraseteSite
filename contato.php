<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ABRASETE</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/changes.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2  col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3">
            <img class="img-responsive" src="logo.jpg" alt="ABRASET Logo">
          </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-lg-offset-1" id="title-info">
              <h1 class="display-1">A B R A S E T E</h1>
              <div id="title-divider"></div>
              <p id="sub-title">Associação Brasileira dos Enfermeiros e Técnicos de Enfermagem</p>
            </div>
        </div>
      </div>
    </div>
    <div class="container-fluid main-nav">
      <nav class="navbar navbar-default">
       <div class="container-fluid">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
         </div>
         <div yclass="navbar-collapse collapse  ">
           <ul class="nav navbar-nav">
             <li><a href="index.html">Home</a></li>
             <li><a class="a-color" href="sobre.html">A ABRASETE</a></li>
             <li><a class="a-color" href="parceiros.html">Parceiros</a></li>
              <li><a class="a-color" href="parceiros.html">Seja parceiro</a></li>
            <li class="active"><a href="contato.html">Contato</a></li>
           </ul>
         </div>
       </div>
     </nav>
    </div>
    <!-- START OF THE PAGE CONTENT-->
    <div class="container">
      <div class="row" >
          <div class="col-lg-6">
            <h1 class="display-1" id="contat-display">
              Deixe sua mensagem !
            </h1>
             <form method ="POST" action="">
               <div class="form-group row form1">
                <label class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-5">
                  <input class="form-control" id="inputEmail3"  placeholder="Ex:.Carlos Silva" name = "nome">
                </div>
              </div>
               <div class="form-group row form1">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email"  required="required" name = "email">
                </div>
              </div>
              <div class="form-group row form1">
               <label  class="col-sm-3 col-form-label">Assunto</label>
               <div class="col-sm-5">
                 <input  class="form-control" id="inputEmail3" placeholder="Do que se trata ?" required="required" name = "assunto">
               </div>
             </div>
             <div class="form-group row form1">
              <label for="inputEmail3" class="col-sm-3 col-form-label" >Telefone<br/>(opcional)</label>
              <div class="col-sm-5">
                <input type="tel" class="form-control" id="inputEmail3" placeholder="(DDD) 99999-9999" name = "telefone">
              </div>
            </div>
             <div class="form-group row form1">
               <div class="col-sm-12">
                 <textarea class="form-control" type="textarea" id="message" placeholder="Deixe aqui sua mensagem" maxlength="600" rows="9" required="required" name = "mensagem"></textarea>
               </div>
             </div>
             <div class="form-group row">
                <div class="col-lg-12">
                <button type="submit" class="btn btn-primary btn-block cnt-button"><span class=" glyphicon glyphicon-envelope" aria-hidden="true"></span></button>
              </div>
            </form>
<!--
<?php
/* script php para enviar o email :)*/
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $assunto = $_POST['assunto'];
  $telefone = $_POST['telefone'];
  $mensagem= $_POST['mensagem'];
  $corpoEmail ="Mensagem de: ".$email."\r\n"."Telefone:".$telefone."\r\n"."Mensagem:\r\n". $mensagem ;
  if(isset($nome)&&isset($email)&& isset($assunto)&& isset($mensagem)){
    $to = "bernardonlignati@gmail.com";
    echo "envoiou";
    $assuntoFinal = "Contato ABRASETE ->".$assunto;
    mail($to,$assuntoFinal,$corpoEmail);
  }
?>
!-->

          </div>
        </div>
        <div class="col-lg-6" >
          <div class="row">
            <div class="col-lg-offset-2 col-lg-12">
             <h1 class="display-1" id="social-display" align="center">
              CONTATO E REDES SOCIAS
              </h1>
                <div class="row">
                <div class="col-xs-offset-4">
                     <span class="glyphicon glyphicon-phone-alt" style = "font-size:24px;"></span>
                     <label class="label-succes social-label">(51) 3228 - 1602</label>
                  </div>
                  <div class="col-xs-offset-4">
                     <i class="fa fa-whatsapp" style="font-size:24px;color:darkgreen"></i>
                     <label class="label-succes social-label" >(51) 99233 - 3989</label>
                  </div>
                  <a href ="https://www.facebook.com/Abrasete-1645403899091923/"><div class="col-xs-offset-4">
                     <i class="fa fa-facebook" style="font-size:24px;color:blue"></i>
                     <label class="label-succes social-label" >Visite a Nossa Pagina!</label>
                  </div></a>
                  <a href ="https://www.instagram.com/abrasete/"><div class="col-xs-offset-5">
                     <i class="fa fa-instagram" style="font-size:24px;color:black;"></i>
                     <label class="label-succes social-label" >@abrasete</label>
                  </div></a>
               
                 <h1 class="display-1" id="social-display" align="center">
                  Localiza&ccedil;&atilde;o
                </h1>
                <label class = "label-local col-sm-offset-3">Rua General C&acirc;mara, 355 conjunto 516</label>
                <img class = "img-responsive" src="local.png">
              </div>
            </div>
          </div>
        </div>
    </div>


  </body>
</html>