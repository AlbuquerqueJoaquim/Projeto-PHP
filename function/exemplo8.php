<?php

    $hierarquia = array(
    array(
      'nome_cargo'=>'CEO',
      'subordinados'=> array(
        //Iniciado : Diretor Comercial
        array(
          'nome_cargo'=>'Diretor Comercial',
          'subordinados'=> array(
            //Inicio Gerente de Vendas
            array(
              'nome_cargo'=>'Gerente de Vendas'
            )
            //Termino: Gerente de vendas
          )
      ),
      //Termino: Diretor Comercial
      //Inicio: Diretor Financeiro
      array(
        'nome_cargo'=> 'Diretor Financeiro',
        'subordinados'=>array(
          //Inicio: Gerente de Contas a Pagar
          array(
          'nome_cargo'=>'Gerente de contas a pagar',
          'subordinados'=>array(
            //inicio: Supervisor de pagamentos
            array(
              'nome_cargo'=>'Supervisor de Pagamentos'
            )
            //Termino: Supervisor de pagamentos
          )
        ),
        //Termino: Gerente de Contas a pagar
        //Inicio: Gerente de Compras
        array(
          'nome_cargo'=>'Gerente de Compras',
          'subordinados'=>array(
            //Inicio: Supervisor de Suprimentos
            array(
              'nome_cargo'=> 'Supervisor de Suprimentos',
              'subordinados'=>array(
                array(
                  'nome_cargo'=>'Funcionario'
                )
               )
              )
            //Termino: supervisor de suprimentos
            )
          )
        //Termino: Gerente de Compras
        )
      )
      //Termino: Diretor financeiro
    )
  )
);
    //exibindo os cargos no html utilizando foreach
    function exibe($cargos){

      $html = '<ul>';
        foreach ($cargos as $cargo) {
          $html .= "<li>";


          $html .= $cargo['nome_cargo'];

          //isset(Informa se a variável foi iniciada) realizando um count
          if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ) {
            $html .= exibe($cargo['subordinados']);

          }


          $html .= "</li>";

        }
      $html .= "</ul>";
      return $html;
    }
    echo exibe($hierarquia);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> Funcion </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
