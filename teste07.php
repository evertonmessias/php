<html>
<head>
<style type="text/css">
fieldset{display:block;position:relative; margin:0 auto; width: 250px;height:180px; top: 50px;}
a{text-decoration: none;font-weight: bold;}
</style>
</head>
<body>
<form method="post">
<fieldset><legend>Session</legend>
<p>Digite algo: <input type="text" name="valor" size="10"/></p>
<p><input type="submit" name="ativar" value="ATIVAR" /></p>
<br><br>
<a href="./teste07-2.php">Próx Pagina, se tiver Session !</a>
</fieldset>
<br><br>
<fieldset>

<?php 

if (isset($_POST['ativar'])) {	// botao ativar
$valor = $_POST['valor'];
print "<br>Teste de passagem de valores por SESSION ==> $valor<br><br>";
session_start();
$_SESSION['valor2']=$valor;}

?>

</fieldset></form></body></html>



