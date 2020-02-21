<?php
namespace inicio{
function site(){
return "
<!DOCTYPE html>
<html lang='pt-br'>

<head>
	<meta charset='UTF-8' />
	<title>Envio de Arquivo</title>

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script type='text/javascript'></script>

	<style type='text/css'>
		body {
			background-color: #bbb;
			font-family: Verdana;
		}

		input,
		fieldset,
		small,
		img,
		.resp {
			display: block;
			position: relative;
			margin: 0 auto;
		}

		fieldset {
			top: 50px;
			width: 350px;
			min-height: 400px;
			padding: 20px;
			background-color: #fff;
		}

		legend {
			font-weight: bold;
			text-align: center;
		}

		input,
		small {
			top: -20px;
		}

		small {
			font-size: 10px;
			left: 35px;
		}

		.botao {
			left: 0;
			top: 0px;
			width: 100px;
		}

		.resp {
			top: 10px;
			text-align: center;
		}

		img {
			width: 200px;
		}
		.ok{font-weight: bolder;color:darkgreen}
		.ko{font-weight: bolder;color:red}
	</style>
</head>
<body>
"; }} 

namespace fim{
function site(){
	return "</body></html>";
}}

?>