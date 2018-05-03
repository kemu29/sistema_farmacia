<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <title>Help_Farma</title>

    <style>
       
        body.center-form {
          min-height: 100vh;
        }
      
        div.center-form {
          position: relative;
          min-height: 100vh;
        }
      
        div.center-form > form {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translateY(-50%) translateX(-50%);
        }
        body {
            margin: 0;
            padding: 0;
            background:img src = 'Tela_login-min.jpg';
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
            }

       #fundo{
        position:fixed;
        height: 100%;
        width: 100%;
        z-index: -999;
       }  ;   
      </style>
 </head>

  <body class="body">
    <img id="fundo" src="../../../img/caduser.jpg">  
    
    <form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
      <table width="625" border="0">
        <tr>
          <td width="69">Usuário:</td>
          <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
            <span class="style1">*</span></td>
        </tr>
        <td>Senha:</td>
            <td><input name="senha" type="password" id="senha" size="8" maxlength="8" />
              <input name="senha" type="passworsd" id="telefone" />
              <span class="style3">Apenas números</span> </td>
        <tr>
          <td>Contato</td>
          <td><input name="email" type="text" id="email" size="70" maxlength="60" />
          <span class="style1">*</span></td>
        </tr>
        <tr>
          <td>Sexo:</td>
          <td><input name="sexo" type="radio" value="Masculino" checked="checked" />
            Masculino
            <input name="sexo" type="radio" value="Feminino" />
            Feminino <span class="style1">*</span> </td>
          </tr>
        </tr>
        <tr>
          <td>DDD:</td>
          <td><input name="ddd" type="text" id="ddd" size="4" maxlength="2" />
          Telefone:
            <input name="telefone" type="text" id="telefone" />
            <span class="style3">Apenas números</span> </td>
        </tr>

        
     </div>        
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>
</html>