<?php
include("../CONEXAO/conexao.php");
extract($_POST); // Extrai os dados do form

//ORGANIZANDO
$mail_recupera = strtolower($mail_recupera); // caso esteja em caixa alta... joga para caixa baixa

$separa = explode("/", $dtNasc_recupera); // separando em vetor pela barra "/"
$dtNasc_recupera = $separa[2].'-'.$separa[1].'-'.$separa[0]; //corrigindo para comparacao no banco. Ex: 2001-01-01
//------------------------ORGANIZADO!!!


  $select_dados = "select login,senha from tb_usuario where email = '$mail_recupera' and data_nacimento = '$dtNasc_recupera';";
  $query_recovery = mysql_query($select_dados) or die(mysql_error());
  while($row = mysql_fetch_array($query_recovery)){
     $val_login = $row["login"];
     $val_senha = $row["senha"];
  }
  
  if (@$val_login == '' && @$val_senha == ''){
    $msg_error = "Dados n&atilde;o cadastrados no sistema!";
    $envia_mail = false;
  }
  else{
    $msg_ok = "Seu login e senha foram encaminhados para o email cadastrado!";
    $envia_mail = true;
  }

if ($envia_mail == true){
  
$mensagem_mail = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Untitled Document</title>
<style type='text/css'>
<!--
.style1 {
	font-family: verdana;
	font-weight: bold;
	font-size: 10px;
	color: #FFFFFF;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
	background-color: #006699;
}
.style3 {font-family: verdana; font-weight: bold; font-size: 10px; color: #FFFFFF; font-style: italic; }
-->
</style>
</head>

<body>
<table width='700' border='3' align='left' cellpadding='0' cellspacing='0' bordercolor='#FFFFFF'>
  <tr>
    <td background='http://200.252.40.33/temporario/tempTcc/RPS/CSS_IMAGES/images/templatemo_header_bg.jpg'><p class='style1'> &nbsp;Caro usu&aacute;rio este &eacute; um email de recupera&ccedil;&atilde;o de login e senha solicitado por voc&ecirc; no RPSystem:</p>
    <table width='400' border='0' cellpadding='0' cellspacing='4'>
        <tr>
          <td width='58'><div align='left'><span class='style1'>LOGIN:
          </span></div></td>
          <td width='330' class='style1'><div align='left'>$val_login</div></td>
        </tr>
        <tr>
          <td><div align='left'><span class='style1'>SENHA:</span></div></td>
          <td class='style1'><div align='left'>$val_senha</div></td>
        </tr>
      </table>
      <p><span class='style3'>*Caso n&atilde;o tenha sido voc&ecirc; este solicitante informe ao administrador. </span><br />
      </p>
    </td>
  </tr>
</table>
</body>
</html>";

  @mail("$mail_recupera","RPSystem - Acesso",$mensagem_mail, "Content-Type: text/html");
}
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Recuperar Senha</title>
<link href="../CSS_IMAGES/big_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	color: #FFFFFF;
}
-->
</style>

<style type="text/css">
<!--
.buttonOK {
background-color: transparent;
color: #a8b5b2;
font-size: 8pt;
font-family: arial;
}
.style3 {
	font-size: 11px;
	font-weight: bold;
	color: #003366;
}
-->
</style>

</head>
<body>

<div id="templatemo_container">

	<div id="templatemo_header_panel">
    	<div id="site_title">
        	RPSystem</div>
        <div id="header_links"><a href="#">Contato com o suporte</a></li></div>
    </div> <!-- end of header panel -->

    <div id="templatemo_menu">
    	<ul>
            <li><a href="../index.html" class="current"><span></span>Login</a></li>
        </ul>

    </div>

  <div id="templatemo_content">

    	<div class="content_section">
    	  <form id="form1" name="form1" method="post" action="envia_mail_recuperaSenha.php">
    	  <div class="content_section_box margin_right_10">
            	<div class="content_section_box_bottom"></div>
                <div class="content_section_box_header">RECUPERAR LOGIN E SENHA</div>
                <div class="content_section_box_content">
                  <div class="rc_btn_01">
                    <table width="100%" border="0">
                      <tr>
                        <td class="style1"><div align="left">
                          <table width="100%" border="0">
                            <tr>
                              <td width="3%"><div align="center"><img src="../CSS_IMAGES/images/atencao.png" width="20" height="18" /></div></td>
                              <td width="97%" class="style3"><div align="left">ATENÇÃO:</div></td>
                            </tr>
                            <tr>
                              <td><div align="center"><img src="../CSS_IMAGES/images/seta_item.png" width="10" height="10" /></div></td>
                              <td class="style2"><? echo @$msg_error; ?> <? echo @$msg_ok; ?></td>
                            </tr>
                          </table>
                          <br />
                        </div></td>
                      </tr>
                    </table>
                    <div align="left"></div>
                  </div>
                </div>
          </div>
          </form>
            <div class="cleaner"></div>
    </div>

        <div class="cleaner"></div>
        <div class="horizontal_divider"></div>

        <div class="cleaner"></div>

  </div> <!-- end of content -->

	<div id="templatemo_footer">
    	<div id="top"></div>
    	Copyright &copy; | Victor Cova
        <div id="bottom"></div>
	</div>

</div>
</body>
</html>
