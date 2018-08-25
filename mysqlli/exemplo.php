<?php

//conectando ao bando
  $conn = new mysqli("127.0.0.1", "root", "JJ*21021990", "dbphp7");

//verificando um erro
  if ($conn-> connect_error) {

//mostrando o erro na tela
    echo "Error: " . $conn->connect_error;

  }


$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha)VALUES(?,?)");
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$%";

$stmt->execute();


$login = "pedro";
$pass = "!@";

$stmt->execute();
?>
