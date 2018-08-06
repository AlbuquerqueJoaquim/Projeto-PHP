<?php

      /**
       * metodo Acessores e Modificadores
       */
      class Carro
      {
        private $modelo;
        private $motor;
        private $ano;

        public function getModelo(){
          return $this->modelo;
        }
        public function setModelo($modelo){
          $this->modelo = $modelo;
        }
        public function getMotor(){
          return $this->motor;
        }

        public function setMotor($motor){
          $this->$motor = $motor;
        }
        public function getAno(){
          return $this->ano;
        }
        public function setAno($ano){
          $this->ano = $ano;
        }

        public function exibir()
        {
          return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()

          );
        }
      }

      $gol = new Carro();
      $gol->setModelo("gol GT");
      $gol->setMotor("1.4");
      $gol->setAno("2012");

      print_r($gol->exibir());
      echo"<br>";
      var_dump($gol->exibir());



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
