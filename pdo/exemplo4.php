<?php

  $conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "JJ*21021990");

  $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

  $id = 1;


  $stmt->bindParam(":ID", $id);

  $stmt->execute();
  echo "Excluido com sucesso!"


?>
