<?php
      //metodos magicos

      class Endereco {

        private $cidade;
        private $estado;
        private $cep;

        //metodo contrutor passando 3 parametros
        public function __construct($a, $b, $c){

          $this->cidade = $a;
          $this->estado = $b;
          $this->cep = $c;
        }

        //metodo para destruir algo
        public function __destruct(){

          var_dump("DESTRUIR");
        }
        public function __toString(){

          return $this->cidade. ", ".$this->estado." - ".$this->cep;
        }
      }

      $meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");
      echo $meuEndereco
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
