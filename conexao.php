<?php

// online:
//header('Content-Type: text/html; charset=utf-8');

	$servidor = "xxxxxxxxxxxxxxxx";
	$usuario = "xxxxxxxxxxxxxxxx";
	$senha = "xxxxxxxxxxxxxxxx";
	$banco = "xxxxxxxxxxxxxxxx";
	
	$link = mysql_connect($servidor, $usuario, $senha) or die("Nao foi possivel conectar: " . mysql_error());

	// selecionando o banco
	mysql_select_db($banco) or die("Nao foi possivel selecionar o banco de dados");
	
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>
