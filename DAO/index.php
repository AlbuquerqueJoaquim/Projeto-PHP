<?php
require_once("config.php");
#$sql = new Sql();
#$usuario = $sql->select("SELECT * FROM tb_usuarios");
#echo json_encode($usuario);

#  $user = new usuario();
#  $user->loadById(2);
#  echo $user;
#carregar uma lista de tb_usuarios
//$lista = usuario::getList();
//echo json_encode($lista);

#Carregar uma lista de usuaruios buscando pelo $login
//$search = usuario::search("pedro");
//echo json_encode($search);

#carrega um usuario, usando login e senha
$usuario = new usuario();
$usuario->login("root","!@#$%");
echo $usuario;
 ?>
