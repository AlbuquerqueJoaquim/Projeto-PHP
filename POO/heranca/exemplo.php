<?php

      /**
       * Classe Documento trabalhando com herança
       */
      class Documento
      {
        private $numero;
        public function getNumero()
        {
          return $this->numero;
        }
        public function setNumero($n)
        {

          $this->numero = $n;

        }
      }
      class CPF extends Documento{

        public function validar():bool
        {
          $numeroCPF = $this->getNumero();
          //validar do cpf
          return true;
        }
      }
      $doc = new CPF();
      $doc->setNumero("111222333-44");
      var_dump($doc->validar());
      echo "<br/>";

      echo $doc->getNumero();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> Class Heranca - PHP  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
