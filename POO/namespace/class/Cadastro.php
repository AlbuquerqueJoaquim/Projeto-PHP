<?php

  class Cadastro {

    private $nome;
    private $email;
    private $senha;

    public function getNome():string
    {
      return $this->nome;

    }
    public function getEmail():string
    {
      return $this->email;

    }
    public function getSenha():string
    {
      return $this->senha;

    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function __toString(){

//utilizando json para enviar um array
      return json_encode(array(
        "nome"=>$this->getNome(),
        "email"=>$this->getEmail(),
        "senha"=>$this->getSenha()
      ));
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> NameSpace - PHP  </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
