<?php
      /**
       * modificadores de acesso
       */
      class Funcionario
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

      //criando a herança do metodo funcionario
      class Professor extends Funcionario{

        public function verDados(){

          echo get_class($this) . "<br/>";
          echo $this->nome . "<br/>";
          echo $this->idade . "<br/>";
          echo $this->senha . "<br/>";

        }

      }

      //instanciando objeto de professor
      $objeto = new Professor();
      //echo $objeto->senha . "<br/>";
      $objeto->verDados();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> Class Herança - PHP  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
