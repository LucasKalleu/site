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

    <ul id="slide-out" class="side-nav">
      <li> <div class="user-view">
        <div class="background">
          <img src="../img/bg.jpg" style="width: 100$; height: 125%;">
        </div>
        <a href="#!user"> <img src="../img/teste.jpeg" class="circle"> </a>
        <a href="#!name"> <span class="white-text name">Lucas Kalleu</span> </a>
        <a href="#!email"> <span class="white-text email">meudiacasual@gmail.com</span> </a>
      </div> </li>
      <li> <a href="#!"> <i class="material-icons">local_florist</i>HOME </a> </li>
      <li> <a href="#!"> <i class="material-icons">store</i>LOJA </a> </li>
      <li> <a href="#!"> <i class="material-icons">forum</i>FEED </a> </li>
      <li> <a href="#!"> <i class="material-icons">list_alt</i>PLANOS </a> </li>
      <li> <a href="#!"> <i class="material-icons">video_library</i>AULAS </a> </li>
      <li> <a href="#!"> <i class="material-icons">folder_shared</i>MEU PERFIL </a> </li>
      <li> <a href="#!"> <i class="material-icons">settings</i>CONFIGURAÇÕES </a> </li>
      <li> <a href="#!"> <i class="material-icons">close</i>SAIR </a> </li>
    </ul>
    <nav class="nav-extended teal darken-3">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo center"><div class="" style="float: left; color: #004d40;"> ECO </div> <div style="float: left;"> HELPER </div> </a>
        <ul class="left hide-on-small">
          <li>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
          </li>
        </ul>
      </div>
    <header>
        <div class="nav-content hide-on-med-and-down">
          <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#home">HOME</a></li>
            <li class="tab"><a href="#loja">LOJA</a></li>
            <li class="tab"><a href="#feed">FEED</a></li>
            <li class="tab"><a href="#planos">PLANOS</a></li>
            <li class="tab"><a href="#aulas">AULAS</a></li>
            <li class="tab"><a href="#perfil">MEU PERFIL</a></li>
            <li class="tab"><a href="#configs">CONFIGURAÇÕES</a></li>
          </ul>
        </div>
      </nav>

      <!--Fim Menu -->

      <div id="home" class="col s12">
        <div class="carousel carousel-slider center" data-indicators="true">
          <div class="carousel-item red white-text" href="#one!" style="background-image: url(../img/bg.jpg); background-size: 100% 200%; background-position: 0% 75%;">
            <h2>First Panel</h2>
            <p class="white-text">This is your first panel</p>
            <div class="carousel-fixed-item center">
              <a class="btn waves-effect white grey-text darken-text-2">Acessar</a>
            </div>
          </div>
          <div class="carousel-item amber white-text" href="#two!" style="background-image: url(../img/bg2.jpg); background-size: 100% 200%; background-position: 0% 55%;">
            <h2>First Panel</h2>
            <p class="white-text">This is your first panel</p>
            <div class="carousel-fixed-item center">
              <a class="btn waves-effect white grey-text darken-text-2">Compre já !</a>
            </div>
          </div>
          <div class="carousel-item green white-text" href="#three!" style="background-image: url(../img/bg3.jpg); background-size: 100% 200%; background-position: 0% 35%;">
            <h2>First Panel</h2>
            <p class="white-text">This is your first panel</p>
            <div class="carousel-fixed-item center">
              <a class="btn waves-effect white grey-text darken-text-2">Alugue já !</a>
            </div>
          </div>
          <div class="carousel-item amber white-text" href="#four!" style="background-image: url(../img/bg4.jpg); background-size: 100% 200%; background-position: 0% 65%;">
            <h2>First Panel</h2>
            <p class="white-text">This is your first panel</p>
            <div class="carousel-fixed-item center">
              <a class="btn waves-effect white grey-text darken-text-2">Assita</a>
            </div>
          </div>
        </div>
      </div>

      <div id="loja" class="col s12">
        LOJA
      </div>

      <div id="feed" class="col s12">
        FEED
      </div>

      <div id="planos" class="col s12">
        PLANOS
      </div>

      <div id="aulas" class="col s12">
        AULAS
      </div>

      <div id="perfil" class="col s12">
        PERFIL
      </div>

      <div id="configs" class="col s12">
        CONFIGURAÇÕES
      </div>

    </header>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript">
      $(".button-collapse").sideNav();
      $('.carousel.carousel-slider').carousel({fullWidth: true});
    </script>
  </body>
</html>
