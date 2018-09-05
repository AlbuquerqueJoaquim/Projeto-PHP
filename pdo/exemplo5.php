<?php

  $conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "JJ*21021990");

  $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

  $id = 1;


  $stmt->bindParam(":ID", $id);

  $stmt->execute();
  #realizando rollback na transação cno comando do banco
  //$conn->rollback();
  #utilizado commit na transação do banco
  $conn->commit();
  echo "Excluido com sucesso!"


?>
