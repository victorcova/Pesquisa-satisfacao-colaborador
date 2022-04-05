<?php
include("conexao.php");

extract($_POST); // Extrai os dados do form

/* Verifica se existe usuario no bd */
$sql_logar = "SELECT * FROM tb_login WHERE user = '$user' && passw = '$senha' and ativo = 1;";
$exe_logar = mysql_query($sql_logar) or die (mysql_error());
$num_logar = mysql_num_rows($exe_logar); // conta o num de linhas

//Verifica se n existe uma linha com o login e a senha digitado
if ($num_logar == 0){
   header ("Location: ../resultados-error.html");
}
else{
//Cria a sessão,verifica permissões e loga!
session_start();

   $_SESSION['user'] = $user;
   $_SESSION['senha'] = $senha;

   header ("Location: redireciona.php");
}
?>
