<?php


    $a = 10;

    //passando o valor por referencia &
    function trocavalor(&$b){

      $b += 20;
      return $b;

    }

      echo trocavalor($a);
      echo "<br>";
      echo trocavalor($a);
      echo "<br>";
      echo $a;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> Function  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
