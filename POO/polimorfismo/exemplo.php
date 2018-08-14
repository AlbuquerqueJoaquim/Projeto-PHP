<?php
        /**
        *
        */
       abstract class Animal
       {

         public function falar(){
           return "som";
         }
         public function mover(){
           return "Andar";
         }
       }
       class Cachorro extends Animal{

         public function falar()
         {
           return "Latir";
         }
       }
       class Gato extends Animal{

         public function falar(){
           return "mia";
         }
       }

       $pluto = new Cachorro();
       echo $pluto->falar() . "<br/>";
       echo $pluto->mover() . "<br/>";
       echo "------------------------------------<br/>"
       $garfield = new Gato();
       echo $pluto->falar() . "<br/>";
       echo $pluto->mover() . "<br/>";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> Polimorfismo - PHP  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
