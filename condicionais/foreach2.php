<?php


      if (isset($_GET)) {

        foreach ($_GET as $key => $value) {

          echo "Nome do Campo: ".$key."<br>";
          echo "Valor do Campos: ".$value;
          echo "<hr>";
        }

      }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Condições com Foreach  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

  <form>
      <input type="text" name="nome">
      <input type="date" name="nascimento">
      <input type="submit" name="ok">

  </form>

</body>

</html>
