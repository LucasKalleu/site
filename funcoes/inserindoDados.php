<?php
  require_once 'conexao.php';
  $nome = $_POST['UsrName'];
  $email = $_POST['UsrEm'];
  $senha = $_POST['UsrPw'];

      if ($valida = mysqli_query($mysqli, "INSERT INTO usuarios (UsrName, UsrEm, UsrPw) VALUES ('$nome', '$email', '$senha')" )) {
        header('Location: ../paginas/home.php');
      }else{
        echo "Não foi possível criar o usuário...<br><a href='../paginas/cadastro.php'>Volte por aqui</a>";
      }
 ?>
