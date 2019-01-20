<?php
  if (isset($_POST['admName']) && isset($_POST['admPassword'])) {
    require_once 'conexao.php';
    $queryUser1 = mysqli_query($mysqli, "SELECT * FROM adm WHERE admName = '$_POST[admName]' AND admPassword = '$_POST[admPassword]'");
    if (mysqli_num_rows($queryUser1) != 0) {
      if ($queryUser = mysqli_fetch_assoc($queryUser1)) {
        header('Location: ../paginas/home.html');
      }else{
        echo "Nenhum usuário com esses dados";
        echo "<br><a href='../index.php>Volte por aqui</a>'";
      }
    }else{
      echo "Nenhum usuário cadastrado com esses dados.";
      echo "<br><a href='../paginas/cadastro.php>Cadastrar</a>'";
    }
  }else {
    header('Location: ../index.html');
  }
?>
