<?php
  require_once '../funcoes/conexao.php';
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!-- Import master.css-->
    <link rel="stylesheet" href="../css/master.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <div class="loginbox">
      <div class="avatar">
        <i class="large material-icons">face</i>
      </div>
      <h1>Login</h1>
      <form class="" action="../funcoes/login.php" method="POST" style="padding: 70px 30px;">
        <p>E-Mail</p>
        <input type="text" name="admName">
        <p>Senha</p>
        <input type="password" name="admPassword">
        <input type="submit" value="Login"><br>
      </form>
    </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>
