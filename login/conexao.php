<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED & ~ E_WARNING);
//header('Content-Type: text/html; charset=utf-8');

// online:
	$servidor = "xxxxxxxxxxxx";
	$usuario = "xxxxxxxxxxxx";
	$senha = "xxxxxxxxxxxx";
	$banco = "xxxxxxxxxxxx";
	
	$link = mysql_connect($servidor, $usuario, $senha) or die("Nao foi possivel conectar: " . mysql_error());

	// selecionando o banco
	mysql_select_db($banco) or die("Nao foi possivel selecionar o banco de dados");

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>
