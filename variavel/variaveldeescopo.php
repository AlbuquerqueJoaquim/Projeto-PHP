<?php

$nome = "Joaquim";

function teste() {
    
    //deixando a variavel global dentro de uma função
    global $nome;
    echo $nome;
    
}

function teste2(){
    
    $nome = "jose";
    echo $nome."<br>"."agora teste2";
}

teste();
echo "<br>";
teste2();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Variavel de escopo </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	
</body>

</html>