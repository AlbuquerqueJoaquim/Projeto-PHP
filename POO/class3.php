<?php

      /**
       *Uma classe para validar CPF em PHP
       */
      class Documento
      {
        private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $resultado = Documento::validarCPF($numero);

        //gerando msg de erro, que pode ser tratada
        if($resultado === false){

          throw new Exception("CPF informado não é valido", 1);

        }

        $this->numero = $numero;

        return $this;
    }

    public static function validarCPF($cpf):bool{

      //verificando se um número foi informado
      if(empty($cpf)) {
       return false;
   }

   //eliminando mascara
   $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
   $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

   //Verifica se o número de digitos informados é igual a 11
   if (strlen($cpf) != 11) {
       echo "length";
       return false;
   }

   //verifica se nenhuma das seguências invalidas abaixo
   //foi digitada. Caso afirmativo, retorna falso
   else if ($cpf == '00000000000' ||
       $cpf == '11111111111' ||
       $cpf == '22222222222' ||
       $cpf == '33333333333' ||
       $cpf == '44444444444' ||
       $cpf == '55555555555' ||
       $cpf == '66666666666' ||
       $cpf == '77777777777' ||
       $cpf == '88888888888' ||
       $cpf == '99999999999') {
       return false;

       //Calcula os digitos verificadores para verificar se
       //o CPF é vaido
    } else {

       for ($t = 9; $t < 11; $t++) {

           for ($d = 0, $c = 0; $c < $t; $c++) {
               $d += $cpf{$c} * (($t + 1) - $c);
           }
           $d = ((10 * $d) % 11) % 10;
           if ($cpf{$c} != $d) {
               return false;
           }
       }

       return true;
   }

    }


}
      $cpf = new Documento();
      $cpf->setNumero("03351791186");
      var_dump($cpf->getNumero());
      echo"<br>";
      echo "O CPF é valido ";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> Class Validar CPF - PHP  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
