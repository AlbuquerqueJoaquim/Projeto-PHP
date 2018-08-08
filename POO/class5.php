<?php
      /**
       * modificadores de acesso
       */
      class Estudante
      {
        //todos podem acessar
        public $nome = "Rasmus Lerdorf";
        //somento podem acessar na mesma classe e os herdeiros
        protected $idade = 48;
        //só na mesmo metodo
        private $senha = "123456";

        public function verDados()
        {
          echo $this->nome . "<br/>";
          echo $this->idade . "<br/>";
          echo $this->senha . "<br/>";
        }
      }

      $objeto = new Estudante();
      //echo $objeto->senha . "<br/>";
      $objeto->verDados();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> Class modificadores - PHP  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
