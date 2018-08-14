<?php

       /**
        * Classe abstrata em PHP
        */

        //criando a interface
       interface veiculo
       {
         public function acelerar($velocidade);
         public function frenar($velocidade);
         public function trocarMarcha($marcha);
       }

       Abstract class Automovel implements veiculo
       {
         public function acelerar($velocidade)
         {
           echo "O veículo acelerou ate ". $velocidade . "km/h";
         }
         public function frenar($velocidade)
         {
           echo "O veículo frenou até ". $velocidade . "km/h";
         }
         public function trocarMarcha($marcha)
         {
           echo "O veículo engatou a marcha ". $marcha;
         }

       }

       class Opala extends Automovel
       {
         public function empurrar(){

         }
       }

       $carro = new Opala();
       $carro->acelerar(200);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> Class Abrstract - PHP  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
