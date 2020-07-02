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

    <link rel="stylesheet" href="../styles/pontuacao-tabela.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://pbs.twimg.com/media/Dv_DEzsWoAIanlg.jpg">
    <title>Scrim - Pontuação</title>
</head>

<body>
    <div class="container center-align">
        <h3>Juiz, eu preciso que você me confirme as informações abaixo.</h3>
        <!--Começo formulário-->
      <div class="row">
        <form class="col s12 formulario" method="POST" action="inserir-squad.php">
         <h5>Defina o valor de cada ponto</h5>
        <div class="row">
          <div class='input-field col s3'> 
            <input name="1lugar" type='text'value='200' maxlenght='3'>
            <label for='last_name'>1º</label>
          </div>
          <div class='input-field col s3'> 
            <input name="2lugar" type='text'value='180' maxlenght='3'>
            <label for='last_name'>2º</label>
          </div>
          <div class='input-field col s3'> 
            <input name="3lugar" type='text'value='170' maxlenght='3'>
            <label for='last_name'>3º</label>
          </div>
          <div class='input-field col s3'> 
            <input name="4lugar" type='text'value='160' maxlenght='3'>
            <label for='last_name'>4º</label>
          </div>
        </div><!--FIM ROW-->
        <div class="row">
          <div class='input-field col s3'> 
            <input name="5lugar" type='text'value='150' maxlenght='3'>
            <label for='last_name'>5º</label>
            </div>
          <div class='input-field col s3'> 
            <input name="6lugar" type='text'value='140' maxlenght='3'>
            <label for='last_name'>6º</label>
          </div>
          <div class='input-field col s3'> 
            <input name="7lugar" type='text'value='130' maxlenght='3'>
            <label for='last_name'>7º</label>
          </div>
          <div class='input-field col s3'> 
            <input name="8lugar" type='text'value='120' maxlenght='3'>
            <label for='last_name'>8º</label>
          </div>
        </div><!--FIM ROW-->
        <div class="row">
          <div class='input-field col s3'> 
            <input name="9lugar" type='text'value='110' maxlenght='3'>
            <label for='last_name'>9º</label>
            </div>
          <div class='input-field col s3'> 
            <input name="10lugar" type='text'value='100' maxlenght='3'>
            <label for='last_name'>10º</label>
          </div>
          <div class='input-field col s3'> 
            <input  name="11lugar" type='text'value='90' maxlenght='3'>
            <label for='last_name'>11º</label>
          </div>
          <div class='input-field col s3'> 
            <input name="12lugar" type='text'value='80' maxlenght='3'>
            <label for='last_name'>12º</label>
          </div>
        </div><!--FIM ROW-->
        <div class="row">
        <div class='input-field col s3'> 
            <input name="13lugar" type='text'value='70' maxlenght='3'>
            <label for='last_name'>13º</label>
            </div>
          <div class='input-field col s3'> 
            <input name="14lugar" type='text'value='60' maxlenght='3'>
            <label for='last_name'>14º</label>
          </div>
          <div class='input-field col s3'> 
            <input name="15lugar" type='text'value='50' maxlenght='3'>
            <label for='last_name'>15º para baixo.</label>
          </div>
          <div class='input-field col s3'> 
            <input name="kill" type='text'value='15' maxlenght='3'>
            <label for='last_name'>KILL</label>
          </div>
        </div><!--FIM ROW-->
        <div class="row">
          <div class='input-field col s5'> 
            <a class="waves-effect waves-light btn" href="../index.php"><i class="material-icons left">arrow_back</i><b>voltar</b></a>
          </div>
          <div class='input-field col s7'> 
            <button class="waves-effect waves-light btn" type="submit"><i class="material-icons left">group_add</i><b>Criar Squads</b></button>
          </div>
        </div>
        <br><br>
        </form>
        <!--Fim formulário-->
      </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>