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
    <div class="loginbox">
      <div class="avatar">
        <i class="large material-icons">face</i>
      </div>
      <h1>Login</h1>
      <form class="" action="funcoes/login.php" method="POST" style="padding: 70px 30px;">
        <p>E-Mail</p>
        <input type="text" name="UsrEm">
        <p>Senha</p>
        <input type="password" name="UsrPw">
        <input type="submit" value="Login"><br>
        <a href="#">Perdeu sua senha ?</a><br>
        <a href="paginas/cadastro.php">Você não tem uma conta ?</a>
      </form>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">

    </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/jquery-cycle.js">

    </script>
  </body>
</html>
