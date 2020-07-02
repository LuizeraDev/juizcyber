<?php 
session_start();
for($i = 1; $i <= 25; $i++)
{
        if(isset($_POST['killSquad' . $i . 'Jogo2']))
        {
           $_SESSION['killSquad' . $i . 'Jogo2'] = $_POST['killSquad' . $i . 'Jogo2'];
        }
        if(isset($_POST['colocacaoSquad' . $i . 'Jogo2']))
        {
           $_SESSION['colocacaoSquad' . $i . 'Jogo2'] = $_POST['colocacaoSquad' . $i . 'Jogo2'];
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

    <link rel="stylesheet" href="../styles/adicionar-pontos-squad.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://pbs.twimg.com/media/Dv_DEzsWoAIanlg.jpg">
    <title>Scrim - Adicionar Pontos</title>
</head>

<body>
        <div class="container center-align">
        <h3>Juiz, agora você deve adicionar os pontos.</h3>
        <!-- form -->
        <div class="row">
        <form class="col s12 formulario" method="POST" action="tabela.php">
            <h5>Preencha com os dados do terceiro jogo </h5>
            <br>
            <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad1']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 1º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad1Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad2']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 2º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad2Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao2">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad3']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 3º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad3Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao3">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad4']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 4º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad4Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao4">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad5']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 5º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad5Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao5">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad6']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 6º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad6Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao6">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad7']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 7º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad7Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao7">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad8']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 8º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad8Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao8">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad9']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 9º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad9Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao9">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad10']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 10º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad10Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao10">
            </div>
        </div><!--Final da row-->
        
        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad11']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 11º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad11Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao11">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad12']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 12º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad12Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao12">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad13']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 13º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad13Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao13">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad14']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 14º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad14Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao14">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad15']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 15º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad15Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao15">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad16']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 16º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad16Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao16">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad17']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 17º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad17Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao17">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad18']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 18º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad18Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao18">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad19']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 19º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad19Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao19">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad20']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 20º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad20Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao20">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad21']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 21º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad21Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao21">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad22']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 22º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad22Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao22">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad23']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 23º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad23Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao23">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad24']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 24º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad24Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao24">
            </div>
        </div><!--Final da row-->

        <div class='row'>
            <div class="input-field col s4">
            <input disabled value="<?php echo $_SESSION['squad25']?>" id="disabled" type="text" class="validate">
            <label for="last_name">Slot 25º</label>
            </div>
            <div class="input-field col s4">
            <input name="killSquad25Jogo3" min="0" max="100" type="number">
            <label for="last_name">Abates da equipe</label>
            </div>
            <div id="colocacao25">
            </div>
        </div><!--Final da row-->
        <!--buttons-->
        <div class="row">
          <div class='input-field col s5'> 
            <a class="waves-effect waves-light btn" href="../pages/adicionar-jogo2.php"><i class="material-icons left">arrow_back</i><b>voltar</b></a>
          </div>
          <div class='input-field col s7'> 
            <button class="waves-effect waves-light btn" type="submit"><i class="material-icons left">looks_3</i><b>Marcar Pontos</b></button>
          </div>
        </div>
        <br><br>      
        </form>
        </div>
<script src="../scripts/adicionar-jogo3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>