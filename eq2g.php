<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width">
<title>EQUACAO DO 2o GRAU EM PHP</title>

<style type="text/css">
body{background-color: rgba(220,220,220,0.8);font-family: Arial;font-size:18px;}
fieldset{display:block;position:relative;top:50px; margin: 0px auto;width: 300px;height: 430px;text-align: center;}
.resp {display: block;position:relative;width: 210px;margin: 0 auto;height: 100px;top: -10px;text-align: center;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(function () {
	$("#apagar").click(function () {
		$(".resposta").html("");
	});		
})

</script>

</head>
<body>
<form method="GET">
<fieldset><legend><b>EQ. 2<sup>o</sup> GRAU EM PHP</b></legend>
<h4>Formato Ax<sup>2</sup> + Bx + C = 0</h4>
<label>Valor A :&ensp;<input type="number" step="0.1" name="a" placeholder="termo A"/></label><br><br>
<label>Valor B :&ensp;<input type="number" step="0.1" name="b" placeholder="termo B"/></label><br><br>
<label>Valor C :&ensp;<input type="number" step="0.1" name="c" placeholder="termo C"/></label><br><br>
<p><input type="submit" value="CALCULAR"/> &nbsp; <input type="reset" id="apagar" value="APAGAR"> </p>
<fieldset class="resp"><legend>Resposta</legend>
<?php

function eq2grau ($a,$b,$c){
if($a == 0) {echo "<p class='resposta'>Obs.: Valor A não pode ser nulo!</p>";}else{		
	if ($a != "" && $b != "" && $c != "") {		
		$delta=((pow($b, 2))-(4*$a*$c));
		if ($delta>=0){
		$x1=((-1*$b)+(sqrt($delta)))/(2*$a);
		$x2=((-1*$b)-(sqrt($delta)))/(2*$a);
		printf("<p class='resposta'> x<sub>1</sub> = %.2f  ,  x<sub>2</sub> = %.2f </p>",$x1,$x2);}
		else {echo "<p class='resposta'>Nao existem raizes reais!</p>";}}		
		else {echo "<p class='resposta'>Digite os valores corretamente!</p>";}}}
		
		
$A = @$_GET['a'];$B = @$_GET['b'];$C = @$_GET['c'];

eq2grau ($A,$B,$C);

?>
</fieldset>
</fieldset>
</form>
</body></html>