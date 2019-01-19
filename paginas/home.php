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

      .propaganda-mobile {
        text-shadow: #000 0.4px -0.4px, #000 -0.4px 0.4px, #000 0.4px 0.4px, #000 -0.4px -0.4px;
      }
    </style>
  </head>

  <body>

    <!-- Menu -->

    <ul id="slide-out" class="side-nav">
      <li> <div class="user-view">
        <div class="background">
          <img src="../img/bg.jpg" style="width: 100%; height: 125%;">
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

        <div class="propaganda-mobile">
          <div class="slider">
            <ul class="slides">
              <li>
                <img src="../img/bg.jpg"> <!-- random image -->
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="../img/bg2.jpg"> <!-- random image -->
                <div class="caption left-align">
                  <h3>Left Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="../img/bg3.jpg"> <!-- random image -->
                <div class="caption right-align">
                  <h3>Right Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="../img/bg4.jpg"> <!-- random image -->
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
            </ul>
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
      $(document).ready(function(){
        $('.slider').slider();
      });
    </script>
  </body>
</html>
