<?php
// NECESSÁRIO CHMOD777

   //Incluir a classe excelwriter
   include("excelwriter.inc.php");

   //Você pode colocar aqui o nome do arquivo que você deseja salvar.
    $excel=new ExcelWriter("registros_pesquisa.xls");

    if($excel==false){
        echo $excel->error;
   }

   //Escreve o nome dos campos de uma tabela
   $myArr=array('id','MENSAGEM','DATA-HORA');
   $excel->writeLine($myArr);

   //Seleciona os campos de uma tabela
	$conn = mysql_connect("pesquisa4364.mysql.dbaas.com.br", "pesquisa4364", "P3Squis4__4364") or die ('Nao foi possivel conectar ao banco de dados! Erro: ' . mysql_error());
	if($conn)
	{
	mysql_select_db("pesquisa4364", $conn);
	}

   $consulta = "select * from `tb_resultados` order by id;";
   $resultado = mysql_query($consulta);
   if($resultado==true){
      while($linha = mysql_fetch_array($resultado)){
         $myArr=array($linha['id'],$linha['mensagem'],$linha['data_hora']);
         $excel->writeLine($myArr);
      }
   }
    $excel->close();

    echo "
<style type='text/css'>
body,td,th {
	font-family: verdana;
	font-size: 11px;
}
a:link {
	color: #1B8484;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #1B8484;
}
a:hover {
	text-decoration: underline;
	color: #1B8484;
}
a:active {
	text-decoration: none;
	color: #1B8484;
}
</style>
<body>
	<div align='left'>
  <table width='100%' border='0' bgcolor='#f9f9f9'>
    <tr>
      <td align='left'><p><img src='img-excel.png'></p>
        <p><font color='#033333' size='2'><strong>REGISTROS EXPORTADOS COM SUCESSO!<br />
          Download: <font color='FFFFFF'><a href='registros_pesquisa.xls ' target='_blank'>registros_pesquisa.xls</a></font></strong></font></p>
      <hr /></p></td>
    </tr>
  </table>
</div>";
?>
