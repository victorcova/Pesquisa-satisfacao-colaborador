<?php

// deslogando:

session_start(); //iniciamos a sessao que foi aberta
session_destroy(); //destruimos a sessao ;)
session_unset(); //limpamos as variaveis globais das sessoes
header("Location: ../resultados.html");

?>
