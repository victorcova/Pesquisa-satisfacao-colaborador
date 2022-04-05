<?php
@session_start();
if (isset($_SESSION['user']) && isset($_SESSION['senha'])){
   $login_usuario = $_SESSION['user'];
   $senha_usuario = $_SESSION['senha'];
}
else {
   header("Location: ../resultados-error.html");
   exit();
}
?>
