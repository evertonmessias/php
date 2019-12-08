<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>LOOP & CSS PHP</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(function () {
	$(".botao2").click(function () {
		$(".tabuada").css('display','none');
	});

})
</script>

<?php
$fonte = @$_GET['fonte'];$cor = @$_GET['cor'];
?>

<style type="text/css">
body{background-color: #bbb;font-family: Verdana;}

fieldset, input, select, .tabuada{display: block;position: relative;margin:0 auto;}

fieldset{top:50px;width: 200px;height: 100%;padding:20px;background-color:#fff;}
legend{font-weight:bold; text-align: center;}
label{font-weight:bolder;}
input, select{width: 80px;left: 50px;top: -20px;}
.botao1 , .botao2{width:100px;left:0;}
.tabuada{width: 800px;height: 100%;padding: 10px;text-align: center;top: 100px;
font-size: <?php echo $fonte; ?>;
color: <?php echo $cor; ?>;
}

</style>


</head>

<body>
<form method="GET">
<fieldset><legend><h2>TABUADA</h2></legend>

<label>Numero:<input type="number" min="0" max="10" step="1" name="num"></label>

<label>Fonte:<select name="fonte" id="fonte" >
<option value="10px" selected>10px</option>
<option value="20px">20px</option>
<option value="30px">30px</option>
<option value="40px">40px</option>
<option value="50px">50px</option>
</select> </label>

<label>Cor:<input type="color" name="cor" id="cor"></label>

<br><label><input type="submit" class="botao1" value="MOSTRAR"/></label>
<br><label><input type="reset" class="botao2" value="APAGAR"/></label>
</fieldset>
</form>
<div class="tabuada">
<?php
$num = @$_GET['num'];
if(isset($num)){
for ($i=1;$i<=10;$i++){
	$mult = $num * $i;
	echo "$num X $i = $mult";
	echo "<br>";
}}
?>
</div>
</body></html>