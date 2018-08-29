<?php

  $conn = new mysqli("127.0.0.1", "root", "JJ*21021990", "dbphp7");

  if ($conn-> connect_error) {

    echo "Error: " . $conn->connect_error;

  }

//realizando select no banco
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
$data = array();

//enquando houver dados vc trás
  while ($row = $result->fetch_assoc()) {

    array_push($data, $row);

  }
echo json_encode($data);
?>
