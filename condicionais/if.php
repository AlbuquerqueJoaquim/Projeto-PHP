<?php
    $qualASuaIdade = 28;

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if ($qualASuaIdade < $idadeCrianca)
      {
        echo "Criança";
      }

    elseif ($qualASuaIdade < $idadeMelhor)

    {
      echo "Adolecente";

    }
    elseif ($qualASuaIdade < $idadeMelhor)
    {
      echo "Adulto";
    }

    else
    {
      echo "Idoso";

    }

    echo "<br>";

    echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Condições com IF  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
