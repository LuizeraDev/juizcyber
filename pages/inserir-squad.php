<?php
session_start();

for($i = 1; $i <= 15; $i++){
if(isset($_POST[$i .'lugar']) ||  isset($_POST['kill']))
{
    $_SESSION["primeiro"] =  $primeirolugar = $_POST['1lugar'];
    $_SESSION["segundo"] = $segundolugar = $_POST['2lugar'];
    $_SESSION["terceiro"] = $terceirolugar = $_POST['3lugar'];
    $_SESSION["quarto"] = $quartolugar = $_POST['4lugar'];
    $_SESSION["quinto"] = $quintolugar = $_POST['5lugar'];
    $_SESSION["sexto"] = $sextolugar = $_POST['6lugar'];
    $_SESSION["setimo"] = $setimolugar = $_POST['7lugar'];
    $_SESSION["oitavo"] = $oitavolugar = $_POST['8lugar'];
    $_SESSION["nono"] = $nonolugar = $_POST['9lugar'];
    $_SESSION["decimo"] = $decimolugar = $_POST['10lugar'];
    $_SESSION["decimoprimeiro"] = $decimoprimeirolugar = $_POST['11lugar'];
    $_SESSION["decimosegundo"] = $decimosegundolugar = $_POST['12lugar'];
    $_SESSION["decimoterceiro"] = $decimoterceirolugar = $_POST['13lugar'];
    $_SESSION["decimoquarto"] = $decimoquartolugar = $_POST['14lugar'];
    $_SESSION["decimoquinto"] = $decimoquintolugar = $_POST['15lugar'];
    $_SESSION["kill"] = $kill = $_POST['kill'];
}
}
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

    <link rel="stylesheet" href="../styles/inserir-squad.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://pbs.twimg.com/media/Dv_DEzsWoAIanlg.jpg">
    <title>Scrim - Inserir Squad</title>
</head>

<body>
    <div class="container center-align">
        <h3>Juiz, agora precisamos definir os squads.</h3>
        <!-- form -->
        <div class="row">
        <form class="col s12 formulario" method="POST" action="adicionar-jogo1.php">
        <h5>Preencha com o nome de cada squad</h5>
        <span>Obs: caso não tenha, deixe em branco</span>
        <div class='row'>
        <div id="squads"></div>
        </div>
        <div class="row"><!--buttons-->
          <div class='input-field col s5'> 
            <a class="waves-effect waves-light btn" href="../pages/pontuacao-tabela.php"><i class="material-icons left">arrow_back</i><b>voltar</b></a>
          </div>
          <div class='input-field col s7'> 
            <button class="waves-effect waves-light btn" type="submit"><i class="material-icons left">create</i><b>Definir Nomes</b></button>
          </div>
        </div>
        <br><br>
        </form> 
        </div><!-- final do row -->
    </div>

<script src="../scripts/inserir-squad.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
