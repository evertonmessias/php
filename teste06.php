
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>LOOP & CSS PHP</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"></script>

<style type="text/css">
body{background-color: #bbb;font-family: Verdana;}
fieldset{display: block;position: relative;margin:0 auto;top:50px;width: 250px;height: 100%;padding:20px;background-color:#fff;}
legend{font-weight:bold; text-align: center;}
label{font-weight:bolder;}
input{display: block;position: relative;margin:0 auto;width: 100px;left: 50px;top: -20px;}
.botao{left:0;top:0px;}
.resp{display: block;position: relative;margin:0 auto;top:10px;text-align:center;}
</style>

</head>
<body>
<form method="GET">
<fieldset><legend><h2>MAIOR DE 5</h2></legend>
<label>Número 1:<input type="number" name="num0"></label>
<label>Número 2:<input type="number" name="num1"></label>
<label>Número 3:<input type="number" name="num2"></label>
<label>Número 4:<input type="number" name="num3"></label>
<label>Número 5:<input type="number" name="num4"></label>
<br><label><input type="submit" class="botao" name="botao" value="COMPARAR"/></label>
<br>

<div class="resp">

<?php

for($i=0;$i<5;$i++){
	$num[$i] = @$_GET['num'.$i];
}

foreach($num as $apres){
	echo $apres."&emsp;";
}

$maior = 0;

for($i=0;$i<5;$i++){
	if($num[$i] >= $maior){
		$maior = $num[$i];
	}
}
echo "<br><br>";
echo "Maior número: $maior";

?>

<!-- for($i=0;$i<5;$i++){
	$num[$i] = @$_GET['num'.$i];
}

foreach($num as $apres){
	echo $apres."&emsp;";
}

$maior = 0;

for($i=0;$i<5;$i++){
	if($num[$i] >= $maior){
		$maior = $num[$i];
	}
}
echo "<br><br>";
echo "Maior número: $maior"; -->

</div>
</fieldset>
</form>
</body>
</html>