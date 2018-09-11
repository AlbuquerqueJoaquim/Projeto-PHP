<?php

/**
 *
 */
class usuario
{
#declando variaveis
  private $idusuario;
  private $deslogin;
  private $dessenha;
  private $dtcadastro;

#gerando os getters e setters
  public function getIdusuario(){
    return $this->idusuario;
  }
  public function setIdusuario($value){
    $this->idusuario = $value;
  }
  public function getDeslogin(){
    return $this->deslogin;
  }
  public function setDeslogin($value){
    $this->deslogin = $value;
  }
  public function getDessenha(){
    return $this->dessenha;
  }
  public function setDessenha($value){
    $this->dessenha = $value;
  }
  public function getDtcadastro(){
    return $this->dtcadastro;
  }
  public function setDtcadastro($value){
    $this->dtcadastro = $value;
  }
  public function loadById($id){
    $sql = new Sql();

    $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
      ":ID"=>$id
    ));

    if (count($results) > 0){
      $row = $results[0];

      $this->setIdusuario($row['idusuario']);
      $this->setDeslogin($row['deslogin']);
      $this->setDessenha($row['dessenha']);
      $this->setDtcadastro(new DateTime($row['dtcadastro']));
    }
  }
#carregando um usuaruo
  public function getList(){
    $sql = new Sql();
    return $sql->SELECT("SELECT * FROM tb_usuarios ORDER BY deslogin;");
  }
  #carregando usuario pelo login
  public static function search($login){

    $sql = new Sql();
    return $sql->SELECT("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
      ':SEARCH'=>"%".$login."%"
    ));
  }
  #carregando usuario pelo login e SessionHandler
  public function login($login, $password){
    $sql = new Sql();
    $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN and dessenha = :PASSWORD", array(
      ":LOGIN"=>$login,
      ":PASSWORD"=>$password
    ));
    if (count($results) > 0){
      $row = $results[0];

      $this->setIdusuario($row['idusuario']);
      $this->setDeslogin($row['deslogin']);
      $this->setDessenha($row['dessenha']);
      $this->setDtcadastro(new DateTime($row['dtcadastro']));
    } else{
      throw new \Exception("Error Login ou senha invalidos.");

    }
  }
  # quais os campos irei mostrar
  public function __toString(){

    return json_encode(array(
      "idusuario"=>$this->getIdusuario(),
      "deslogin"=>$this->getDeslogin(),
      "dessenha"=>$this->getDessenha(),
      "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
    ));
  }
}

 ?>
