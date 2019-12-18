<html>
<head>
<title>IMC</title>
<meta charset="UTF-8"/>
<style type="text/css">
fieldset{display: block;position: relative;margin: 0 auto; width: 270px;height: 40px;}
ul{list-style: none;position: relative;display: block;margin-left:-20px;}
li{display: inline-block;position: relative;margin-left: 20px;}
a{background-color: #808080;color: white;padding: 5px;text-decoration: none;}
section{display: block;position: relative;margin: 0 auto; width: 1000px;height: 400px;
	border: 1px solid #aaa;padding:20px;text-align:center;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
<form method="GET">
<fieldset>

<ul>

<li><a href="?num=1">Home</a></li>
<li><a href="?num=2">Fotos</a></li>
<li><a href="?num=3">Contatos</a></li>

</ul>

</fieldset>
</form>

<br>
<hr>
<br>

<section>

<?php
$pagina = @$_GET['num'];
switch($pagina) {
	case 1:
	include('./pag1.html');
	break;
	case 2:
	include('./pag2.html');
	break;
	case 3:
	include('./pag3.html');
	break;
	default:
	include('./pag1.html');
}
?>

</section>

</body>
</html>