<?php

  /*Include Tenta incluir uma página. Caso de algum erro,
  o script retorna um warning (aviso) e prossegue com
  a execução do script. Aceita a passagem de variáveis
  (GET) na string.
  Require Tenta incluir uma página. Caso de algum erro,
  o script retorna um fatal error(erro fatal) (Que maravilha!)
  e aborta a execução do script. Aborta mesmo, já era não
  roda nada mais dali pra frente. Não aceita a passagem de
  variáveis (GET) na string
  include_once() e require_once(): Idênticas as suas funções
  simples, porém se o arquivo referenciado já foi incluso na
  página anteriormente, a função retorna ‘false’ e o arquivo não
  é incluido.*/


  //include "exemplo1.php";
  //require "exemplo1.php";
  require_once "exempl01.php";

  $resultado = somar(10 , 20);

  echo $resultado;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Include  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
