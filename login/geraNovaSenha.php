<?php
include("../CONEXAO/conexao.php");
include("../LOGIN/restrito.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ServerControl - Login</title>
<link href="../CSS_IMAGES/_style.css" rel="stylesheet" type="text/css" />
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
.style5 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>

</head>
<body>

<script src="validar.js"> </script>


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
    	  <form id="form1" name="form1" method="post" action="alteraSenha1acesso.php" onsubmit="JavaScript:return checkdata()" >
    	    <img src="../CSS_IMAGES/images/atencao.png" width="20" height="18" />
    	  <div class="content_section_box margin_right_10">
            	<div class="content_section_box_bottom"></div>
                <div class="content_section_box_header">1&ordm; ACESSO  </div>
                <div class="content_section_box_content">
                  <div class="rc_btn_01">
                    <table width="100%" border="0">
                      <tr>
                        <td><table width="100%" border="0" cellspacing="2" cellpadding="0">
                          <tr>
                            <td><div align="justify"><span class="style5">Como este &eacute; o seu 1&ordm; acesso, altere a sua senha agora:</span></div></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
                    <table width="100%" border="0">
                    <tr>
                      <td><div align="right">Nova Senha: </div></td>
                          <td><label>
                            <input name="senha1" type="password" class="style5" id="nome" style='border: solid 1px #66483D ;background-color: transparent;' size="10" maxlength="6" />
                            </label></td>
                    </tr>
                    <tr>
                      <td><div align="right">Confirme:</div></td>
                          <td><input name="senha2" type="password" class="style5" id="senha2" style='border: solid 1px #66483D ;background-color: transparent;' size="10" maxlength="6" /> </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                          <td><div align="right"></div></td>
                    </tr>
                    </table>
                      <table width="100%" border="0">
                        <tr>
                          <td><div align="right">
                            <input name="OK" type="submit" class="buttonOK" id="OK" value="OK" />
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
