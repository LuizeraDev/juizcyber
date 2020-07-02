<?php 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="./styles/index.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://pbs.twimg.com/media/Dv_DEzsWoAIanlg.jpg">
    <title>Cyber Hunter Scrim</title>
</head>

<body>
    <div class="container center-align">
        <h1>Seja Bem-vindo Juiz</h1>
        <div class="row center-align">
            <div class="col m12 s12">
              <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><b>Créditos</b></a>
              <a class="waves-effect waves-light btn" href="pages/pontuacao-tabela.php"><i class="material-icons left">storage</i><b>Começar nova Tabela</b></a>
           </div>
        </div>
        <div class="row">
            <div class="col s12">
              <a class="waves-effect teal darken-3 btn modal-trigger" href="#modal2"><i class="material-icons left">slideshow</i><b>Vídeo Explicativo</b></a> 
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
    <div class="modal-content">
      <h3>Criador</h3>
      <p>Olá Juiz, sou Luiz Guilherme, mais conhecido como <b>TSK Oi e tchau</b>.<br> Fiz esse site para ajudá-los com as tabelas das scrims :D</p>
      <span>Obs: Em caso de bug, relate no meu whats (13) 981584772</span>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-light btn"><b>Obrigado!</b></a>
    </div>
   </div>

   <div id="modal2" class="modal">
    <div class="modal-content">
      <h3>Como Funciona?</h3>
      <p>Olá caso você esteja perdido, o vídeo abaixo foi feito para você, aperte o play :)</p>
      <iframe style="display: block; margin: auto; width:100%; height: 200px;" src="https://www.youtube.com/embed/RC6__ITmcxc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-light btn"><b>Tamo junto!</b></a>
    </div>
   </div>

    <script src="scripts/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>