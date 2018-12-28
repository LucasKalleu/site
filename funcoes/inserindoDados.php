<?php
  require_once 'conexao.php';

  if ($_REQUEST['submit']) {
    $sql = "INSERT INTO usuarios(nome,sexo,email,senha,cpf,rua,bairro,numero_residencial)
    VALUES('$_POST[nome]',
      '$_POST[sexo]',
      '$_POST[email]',
      '$_POST[senha]',
      '$_POST[cpf]',
      '$_POST[rua]',
      '$_POST[bairro]',
      '$_POST[numero_residencial]')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  };
 ?>
