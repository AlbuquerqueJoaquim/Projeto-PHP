<?php

    //camiinho da sessao atual
    require_once("config.php");

    echo session_save_path();

    echo "<br>";

    var_dump(session_status());

    echo "<br>";

    switch(session_status())
    {
          case PHP_SESSION_DISABLED:
          echo "As sessões estiverem desabilitadas";
          break;

          case PHP_SESSION_NONE:
          echo "As sessões estiverem habilitadas, mas nenhuma existir";
          break;

          case PHP_SESSION_ACTIVE:
          echo "As sessões estiverem habilitadas, e uma existir";
          break;
    }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> SESSION  ID </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>

</body>

</html>
