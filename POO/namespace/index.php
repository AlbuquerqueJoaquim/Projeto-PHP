<?php

    require_once("config.php");

    $cad = new Cadastro();

    $cad->setNome("Joao da Silva");
    $cad->setEmail("joao@gmail.com");
    $cad->setSenha("1234");

    echo $cad;

 ?>
