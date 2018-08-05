<?php
      /**
       * Primeira classe em PHP, Programação orientado a objeto
       */
      class Pessoa extends AnotherClass
      {
        pubic $nome; //atributo nome
        public function falar(){ //metodo

          return "O meu nome é ".$this->$nome;

        }

      }

      $glaucio = new Pessoa();
      $glaucio->nome = "Glaucio Daniel";
      echo $glaucio->falar();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> Class - PHP  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
