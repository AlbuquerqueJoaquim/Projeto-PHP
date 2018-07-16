<?php

  //tirar ou trocar letras por númeroas na  variavel ou números por letras
  $empresa = "O papai noel chegou";

  $empresa = strtoupper(str_replace("o","0", $empresa));
  $empresa = strtoupper(str_replace("E","3", $empresa));

  echo $empresa;

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
