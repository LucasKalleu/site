<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/home.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style media="screen">
      @font-face {
        font-family: Play Pretend;
        src: url('../fonts/Play Pretend.otf');
      }

      .brand-logo {
        font-family: Play Pretend;
      }

    </style>
  </head>

  <body>

    <!-- Menu -->
      <header>

    <ul id="slide-out" class="side-nav">
      <li> <div class="user-view">
        <div class="background">
          <img src="../img/bg.jpg" style="width: 100%; height: 125%;">
        </div>
        <a href="#!user"> <img src="../img/teste.jpeg" class="circle"> </a>
        <a href="#!name"> <span class="white-text name">Lucas Kalleu</span> </a>
        <a href="#!email"> <span class="white-text email">meudiacasual@gmail.com</span> </a>
      </div> </li>
      <li> <a href="catalogo.php"> <i class="material-icons">local_florist</i>CATÁLOGO </a> </li>
      <li> <a href="usuarios.php"> <i class="material-icons">store</i>USUÁRIOS </a> </li>
      <li> <a href="loja.php"> <i class="material-icons">forum</i>LOJA </a> </li>
      <li> <a href="aulas.php"> <i class="material-icons">video_library</i>AULAS </a> </li>
      <li> <a href="#!"> <i class="material-icons">close</i>SAIR </a> </li>
    </ul>
    <nav class="nav-extended teal darken-3">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo center"><div class="" style="float: left; color: #004d40;"> ECO </div> <div style="float: left;"> ADMIN </div> </a>
        <ul class="left hide-on-small">
          <li>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
          </li>
        </ul>
      </div>



        <div class="row hide-on-med-and-down">
          <div class="col s12">
            <ul class="tabs teal darken-3">
              <li class="tab col s1"> <a class="active white-text" target="_self" href="catalogo.php">Catálogo</a> </li>
              <li class="tab col s1"> <a class="white-text" target="_self" href="usuarios.php">Usuários</a> </li>
              <li class="tab col s1"> <a class="white-text" target="_self" href="loja.php">Loja</a> </li>
              <li class="tab col s1"> <a class="white-text" target="_self" href="loja.php">Aulas</a> </li>
              <li class="tab col s1"> <a class="white-text" target="_self" href="loja.php">Sair</a> </li>
            </ul>
          </div>
        </div>

      </header>

    <!--Fim Menu -->

    <main class="col s12">

      <!-- Modal Structure -->
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Adicionar novo ítem.</h4>
          <div class="row">
            <form class="col s12" action="" method="POST">
              <div class="row">
                <div class="input-field col s12">
                  <input id="titulo" type="text" name="titulo">
                  <label for="titulo">Insira um título</label>
                </div>
              </div>
              <div class="row file-field input-field">
                <div class="btn">
                  <span>Arquivo</span>
                  <input type="file" name="img">
                </div>
                <div class="file-path-wrapper">
                  <input type="text" class="file-path validate" value="Tamanho único: 300x300" style="color: grey;">
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea name="descricao" id="descricao" class="materialize-textarea" data-length="460"></textarea>
                  <label for="descricao">Insira uma descrição</label>
                </div>
              </div>
              <div class="row col s12">
                <input type="submit" name="enviar" class="btn waves col s4 offset-s4" value="Enviar">
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <a href="catalogo.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
        </div>
      </div>

      <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
      </div>

    </main>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript">
      $(".button-collapse").sideNav();
      $('.carousel.carousel-slider').carousel({fullWidth: true});
      $(document).ready(function(){
        $('.modal').modal();
      });
    </script>
  </body>
</html>
