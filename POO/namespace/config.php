<?php

//utilizando autoload para verificar o caminho do arquivo
    spl_autoload_register(function($nameClass){

      //mostrar em qual classe esta pegando
      var_dump($nameClass);
      $dirClass = "class";
      $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

      if (file_exists($filename)){
        require_once($filename);
      }

    })


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> NameSpace - PHP  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
