<?php

    $condicao = true;

    while ($condicao) {

      $numero = rand(1, 10);

      if ($numero === 3) {

        echo "Três!!";
        $condicao = false;

      }
        echo $numero. " ";
    }



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Condições com While  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
