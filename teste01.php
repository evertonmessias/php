<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title> TUDO MISTURADO </title>
<style type="text/css">
p{
	background-color:#bbb;
	width:500px;height: 100px;line-height: 100px;
	position: relative;display: block;top: 50px;
	margin:0 auto;
	color:red;text-align: center;
	font-family: Arial;font-size: 30px;font-weight: bold;
}
</style>

<script src="./jquery.js"></script>

<script type="text/javascript">

$(function () {
	$('p').click(function () {
		$(this).html("Estou aprendendo Web");		
	});
	
});

</script>

</head>
<body>

<?php
echo "<p> Olá Mundo, clique-me </p>";
?>

</body>
</html>