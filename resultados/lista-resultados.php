<!--
<?php
include("../login/conexao.php");
include("../login/restrito.php");
?>
-->


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resultados - Gestao Paricipativa</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- Header -->
<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="">
            <h1><strong>lista de resultados</strong>            </h1>
            <p>SELECIONE A RESPOSTA DA PESQUISA NA LISTA ABAIXO:
            <p><br>



  <?php

$cont_pesq = "select COUNT(*) from `tb_resultados`;";
$query_cont_pesq = mysql_query($cont_pesq) or die(mysql_error());
while($row = mysql_fetch_array($query_cont_pesq)){
   $total_pesq = $row["COUNT(*)"];
}//echo $total_pesq;

for($a = 1; $a <= $total_pesq; $a++){
   $dados_button = "select mensagem,data_hora from `tb_resultados` where id = $a;";
   $query_dados_button = mysql_query($dados_button) or die(mysql_error());
      while($row = mysql_fetch_array($query_dados_button)){
         $msg_atual = $row["mensagem"];
         $data_hora_atual = $row["data_hora"];
      }
/* - - - - - - - - - - - - - - - TRATA MENSAGENS - - - - - - - - - - - - - - - */

$msg_atual = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($msg_atual)));


$msg_atual = str_replace("'", "", $msg_atual);
$msg_atual = str_replace("&", "", $msg_atual);
$msg_atual = str_replace('"', "", $msg_atual);
$msg_atual = str_replace('(', "-", $msg_atual);
$msg_atual = str_replace(')', "-", $msg_atual);
$msg_atual = str_replace('/', "-", $msg_atual);
$msg_atual = str_replace("  ", " ", $msg_atual);
$msg_atual = str_replace("   ", " ", $msg_atual);
$msg_atual = str_replace("\r\n", " ", $msg_atual);
$msg_atual = rtrim($msg_atual); // remove espaÃ§os Ã  direita
$msg_atual = ltrim($msg_atual); // remove espaÃ§os Ã  esquerd
$msg_atual = strtoupper($msg_atual);
/* - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - -  - - - - - - - */

   echo "
   <div class='col-md-2'><div class='form-group'>
   <a href='javascript:void(null);' onclick=\"document.getElementById('resposta').innerHTML = '<h2><font color=white>MENSAGEM CAPTADA EM $data_hora_atual</font></h2><BR><h5><font color=white>$msg_atual</font></h5>';\" class='btn btn-default btn-lg page-scroll'>".$data_hora_atual."
   </a></div></div>";

}

?>


              <BR>
              <!-- <a href="#contact" class="btn btn-default btn-lg page-scroll">EXPORTAR TUDO PARA EXCEL</a> -->
              </div>
        </div>
      </div>
    </div>
  </div>
</header>


<div id="footer">
  <div class="container text-center">
    <div class="fnav" id="resposta">

    </div>
  </div>
</div>

<div align="center"><BR>
  <a href='ExportExcel/exemploexcel.php' target="_blank" class='btn btn-default btn-lg page-scroll'>EXPORTAR TODOS OS REGISTROS PARA EXCEL</a>
  <a href="../login/deslogar.php" class='btn btn-default btn-lg page-scroll'>SAIR</a>
  </div>
  
<p><BR></p>

<script language=javascript type= "text/javascript">
function mostra_msg(){
   document.getElementById('resposta').innerHTML = '<?=$msg_atual;?>';
}
</script>

<script charset="utf-8" type="text/javascript" src="../js/validar.js"></script>
<script type="text/javascript" src="../js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="../js/contact_me.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
