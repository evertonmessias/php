<html>
<head>
<title>IMC</title>
<meta charset="UTF-8"/>
<style type="text/css">
body{background-color: #ccc;}
fieldset{background-color:#fff;display: block;position: relative;margin: 0 auto;width: 250px;height:250px;text-align: center;box-shadow: 5px 5px #808080;}
legend{background-color: #808080;color: white;width: 80px;}
input{width: 100px;}label{font-weight: bolder;}
input.botao{background-color: #808080;color: white;font-weight: bold;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" >
function apagar() {
	$("#imc,#cond").html("&nbsp;");
}
</script>

</head>
<body>
<form method="GET">
<fieldset><legend><h3>ICM</h3></legend>
<br>
<label>Peso&ensp;&nbsp;: <input type="number" name="peso" min="0" max="200" step="0.1" required placeholder="Seu Peso" /></label><br><br>
<label>Altura: <input type="number" name="altura" min="0" max="2.2" step="0.1" required placeholder="Sua Altura" /></label><br><br>
<input class="botao" name="botao" type="submit" value="CALCULAR">&emsp;<input class="botao" type="reset" value="APAGAR" onclick="apagar();">

<?php

function imc($p,$a){
	return number_format(($p/pow($a, 2)),2);
}

if(isset($_GET['botao'])) {
$resposta = imc(@$_GET['peso'],@$_GET['altura']);

echo "<p id='imc'>IMC = $resposta</p>";
if($resposta < 20) {echo "<p id='cond'>ABAIXO DO PESO</p>";}
elseif($resposta >= 20 && $resposta < 25) {echo "<p id='cond'>PESO NORMAL</p>";}
else {echo "<p id='cond'>OBESIDADE</p>";}}

?>

<!-- function imc($p,$a){
	return number_format(($p/pow($a, 2)),2);
}

if(isset($_GET['botao'])) {
$resposta = imc(@$_GET['peso'],@$_GET['altura']);

echo "<p id='imc'>IMC = $resposta</p>";
if($resposta < 20) {echo "<p id='cond'>ABAIXO DO PESO</p>";}
elseif($resposta >= 20 && $resposta < 25) {echo "<p id='cond'>PESO NORMAL</p>";}
else {echo "<p id='cond'>OBESIDADE</p>";}} -->

</fieldset>
</form>

</body>
</html>
