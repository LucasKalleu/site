<?php
  require_once 'funcoes/conexao.php';
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- Import master.css-->
    <link rel="stylesheet" href="css/master.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Inicial</title>
  </head>
  <body>
    <main>

      <nav class="nav-extended orange">
        <div class="nav-content">
          <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#test1">Login</a></li>
            <li class="tab"><a href="#test2">Cadastro</a></li>
          </ul>
        </div>
      </nav>

      <div id="test1" class="col s12">
        <div id="area-login">
          <div class="row" style="padding-top:50px;">

            <form class="col s12" action="" method="POST">
              <div class="row">

                <div class="input-field col s12">
                  <input type="email" name="nome" id="email" class="validate">
                  <label for="email" data-error="Email Inválido" data-sucess="Email Válido">Email</label>
                </div>

                <div class="input-field col s12">
                  <input type="password" name="senha" id="senha" class="validate">
                  <label for="senha">Senha</label>
                </div>

              </div>
              <div class="" id="entrar">
                <a href="paginas/home.php" style="width:100%; height: 100%;">Entrar</a>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col s12" id="test2">

      </div>

    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">

    </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
