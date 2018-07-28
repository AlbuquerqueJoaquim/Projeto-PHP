<?php

    function soma(float ...$valores):float{

      return array_sum($valores);
    }
    echo soma(5, 4);
    echo "<br>";
    echo soma(21, 22);
    echo "<br>";
    echo soma(1.2, 3.32);
    echo "<br>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> Funcion </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
