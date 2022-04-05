<?php
include("../CONEXAO/conexao.php");
include("../LOGIN/restrito.php");
extract($_POST); // Extrai os dados do form

$login_0 = $_SESSION['login'];
$update = "UPDATE tb_usuario SET senha = '$senha1' WHERE login = '$login_0';";
$result_snh=mysql_query($update,$link) or die(mysql_error());

$select_acesso = "select acesso from tb_usuario where login = '$login_0';";
$query_acesso0 = mysql_query($select_acesso) or die(mysql_error());
while($row = mysql_fetch_array($query_acesso0)){
   $val_acesso = $row["acesso"];
}

$val_acesso = $val_acesso+1;
//echo $val_acesso;
$update_acesso = "UPDATE tb_usuario SET acesso = '$val_acesso' WHERE login = '$login_0';";
$result_acesso=mysql_query($update_acesso,$link) or die(mysql_error());

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ServerControl - Login</title>
<link href="../CSS_IMAGES/_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.buttonOK {
background-color: transparent;
color: #a8b5b2;
font-size: 8pt;
font-family: arial;
}
.style2 {
	font-size: 10px;
	font-weight: bold;
	color: #FFFFFF;
}
.style4 {
	color: #990000;
	font-size: 11px;
}
-->
</style>

</head>
<body>
<div id="templatemo_container">
<!-- RPSystem -->
	<div id="templatemo_header_panel">
    	<div id="site_title">
        	RPSystem</div>
        <div id="header_links"><a href="#">Contato com o suporte</a></div>
    </div> <!-- end of header panel -->

    <div id="templatemo_menu">
    	<ul>
            <li><a href="../index.html" class="current"><span></span>Login</a></li>
        </ul>

    </div> <!-- end of menu -->

  <div id="templatemo_content">

    	<div class="content_section">
    	  <form id="form1" name="form1" method="post" action="../HOME_PAGE/home_page.php">
    	  <div class="content_section_box margin_right_10">
            	<div class="content_section_box_bottom"></div>
                <div class="content_section_box_header">1&ordm; ACESSO  </div>
                <div class="content_section_box_content">
                  <div class="rc_btn_01">
                    <table width="100%" border="0">
                      <tr>
                        <td><img src="../CSS_IMAGES/images/atencao.png" width="20" height="18" /></td>
                        <td class="style2 style4">SUA SENHA FOI ALTERADA COM SUCESSO! </td>
                      </tr>
                    </table>
                    <br />
                    <table width="100%" border="0">
                        <tr>
                          <td><div align="right">
                            <input name="Avan&ccedil;ar" type="submit" class="buttonOK" id="Avan&ccedil;ar" value="Avan&ccedil;ar" />
                          </div></td>
                        </tr>
                    </table>
                  </div></div>
          </div>
          </form>
            <div class="cleaner"></div>
    </div>

        <div class="cleaner"></div>
        <div class="horizontal_divider"></div>
        <div class="margin_bottom_30">
          <div class="content_section_w310"> <a href="http://validator.w3.org/check?uri=referer"><br />
          </a></div>
        </div>

        <div class="cleaner"></div>

  </div>

	<div id="templatemo_footer">
    	<div id="top"></div>
    	Copyright &Acirc;&copy;
		| Victor Cova
        <div id="bottom"></div>
	</div>
</div>
</body>
</html>