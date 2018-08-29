<?php

  $conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "JJ*21021990");

  $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

  $login = "Mario Word";
  $password = "123454321";

  $stmt->bindParam(":LOGIN", $login);
  $stmt->bindParam(":PASSWORD", $password);

  $stmt->execute();
  echo "Inserido com sucesso!"


?>
