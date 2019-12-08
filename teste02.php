<html>
<head>
<title>MEDIA</title>
<meta charset="UTF-8">
</head>

<body>

<form method="GET" >
<input type="number" name="valor1"><br>
<input type="number" name="valor2"><br>
<input type="submit" value="CALCULA">
</form>

<?php

$v1 = @$_GET['valor1'];
$v2 = @$_GET['valor2'];

$media = ($v1 + $v2) / 2;

echo "<h3>A Média é $media</h3>";

?>

<!-- CODIGO FONTE:
$v1 = @$_GET['valor1'];
$v2 = @$_GET['valor2'];
$media = ($v1 + $v2) / 2;
echo "<h3>A Média é $media</h3>";
-->

</body>
</html>
