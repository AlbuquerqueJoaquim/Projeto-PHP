<?php

  $frase = "A repetição é mãe da retenção.";
  $palavra = "mãe";

  $q = strpos($frase, $palavra);
  $texto = substr($frase, 0, $q);

  var_dump($texto);

  $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

  echo "<br>";

  var_dump($texto2);   

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
