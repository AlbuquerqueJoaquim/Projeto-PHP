<?php

  $nome = "Hcode";
  $nome2 = 'Treinamento';
  $nome3 = "Joaquim Albuquerque";

  var_dump($nome, $nome2);
  echo "<br>";
  echo "ABC $nome";
  echo "<br>";
  echo 'ABC $nome';

  //todas as letras maisculas
  $nome3 = strtoupper($nome3);
  echo $nome3;
  echo "<br>";

  //letras minusculas
  $nome3 = strtolower($nome3);
  echo $nome3;
  echo "<br>";

  //primeiroa letra maiscula
  echo ucfirst($nome3);
  echo "<br>";
  //as primeiras letras maisculas de uma palavra
  echo ucwords($nome3);





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Strings  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
