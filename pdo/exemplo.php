<?php

  $conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "JJ*21021990");

  $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

  $stmt->execute();

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key.":</strong>".$value."<br>";
    }

      echo "======================================================================<br>";

  }

?>
