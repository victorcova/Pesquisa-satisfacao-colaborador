<!--

<?php
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");

$this_time = date("d/m/Y H:i:s");

extract($_POST); // Extrai os dados do form
//echo $message;die;

if (!$message) {
  		 $msg = '<h1><font color="red"><strong>Erro!<br>Pesquisa enviada sem dados.</strong></font></h1> <br> <p>A pesquisa n&atilde;o foi salva.</p>';
      }else{
         $resultadopesquisa = "INSERT INTO tb_resultados (id,mensagem,data_hora) VALUES ('','$message','$this_time');";
         $querypesquisa = mysql_query($resultadopesquisa,$link) or die(mysql_error());
         $msg = '<h1><strong>MUITO OBRIGADO :-)</strong></h1> <br> <h1><span class="brand"><strong>VOC&Ecirc; FOI FUNDAMENTAL</strong></span></h1> <br> <p>PESQUISA REGISTRADA COM SUCESSO. <br>SICOOB EMPRESARIAL - 2018<br>';
      }

?>

-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pesquisa - Gestão Paricipativa</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<script>
//Submit form with id function
function submit_by_id() {
	var mensagem = document.getElementById("message").value;
	//alert(mensagem);

	if(mensagem.length >= 20)// validacao
	  {
	    document.getElementById("pesquisa").submit();//form submission
	  }
	else{
		alert("Mensagem nÃ£o enviada. Por favor preencha corretamente a sua mensagem. Minimo: 20 caracteres.");

	}
}
</script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- logo -->
<div id="menu" class="navbar navbar-default navbar-fixed-top" align="center">
  <div class="container" align="center">
      <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo/logo-4155.png"/></a>
  </div>
</div>


<!-- Header -->
<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
<?php echo $msg; ?>
            </p>
            <a href="index.html" class="btn btn-default btn-lg page-scroll">VOLTAR</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; VICTOR COVA.</p>
    </div>
  </div>
</div>

<script charset="utf-8" type="text/javascript" src="js/validar.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
