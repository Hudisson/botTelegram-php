
<?php

require 'vendor/autoload.php';

use \App\Comunication\Alert;

if(isset($_POST['btn-enviar'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    //verificar se os campos estão preenchidos

    if($nome == ""){
        header("Location: index.php?status=nome_vazio");
    }

    if($email == ""){
        header("Location: index.php?status=email_vazio");
    }

    if($assunto == ""){
        header("Location: index.php?status=assunto_vazio");
    }

    if($menssagem == ""){
        header("Location: index.php?status=msg_vazio");
    }

    $fullMensagem ="
    Nome: $nome\n E-mail: $email\n\n Assunto: $assunto\n\n $mensagem ";

    Alert::sendMessage($fullMensagem);

    header("Location: index.php?status=sucesso");

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hudisson Xavier - Conatato</title>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet"  href="assets/css/style.css">
    
</head>
<body>
   <section id="form-contato">
    <div id="fade" class="hide"></div>
    <div id="modal" class="hide">
        <div class="modal-header">
            <h4 id="modal-title">Modal Sucesso</h4>
        </div>
        <div class="modal-body">
            <p id="status_msg"></p>
        </div>
        <div class="modal-footer">
            <button id="btn-modal-close">Fechar</button>
        </div>
    </div>


    <form class="form-horizontal" action="<?php echo "index.php"; ?>" method="post" role="form" >

        <div id="div-formulario">

        <div class="div-inputs" id="div-input-name">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required placeholder="Seu nome *">
        </div>

        <div  class="div-inputs" id="div-input-email">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="E-mail para contato *" required>
        </div>

        <div  class="div-inputs" id="div-input-assunto">
            <label for="assunto">Assunto:</label>
            <input type="text" name="assunto" id="assunto" placeholder="Assunto da menssagem *" required>
        </div>

        <div  class="div-inputs" id="div-input-mensagem">
            <label for="menssagem">Sua Menssagem</label>
            <textarea name="mensagem" id="mensagem" cols="60" rows="15" placeholder="Deixe aqui sua mensagem *"></textarea>
        </div>
        <div class="div-btn-enviar">
            <input class = "btn-enviar" id="submit" name="btn-enviar" type="submit" value="Enviar">
        </div>

        </div>
        <!-------------------------------------------------------------------------------------------->
    </form>

    </section>

    <script src="assets/js/scripts.js"></script>
</body>
</html>