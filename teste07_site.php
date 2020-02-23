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
		#area,
		input,		
		small,
		img,
		.resp {
			display: block;
			position: relative;
			margin: 0 auto;
		}
		#area{
		width:820px;
		height:480px;				
		}
		fieldset.f1, fieldset.f2 {
			top: 50px;
			width: 350px;
			min-height: 400px;
			padding: 20px;
			background-color: #fff;
		}
		.f1{float:left}
		.f2{float:right;}
		legend {
			font-weight: bold;
			text-align: center;
		}

		input,
		small {
			top: -20px;
		}
		.escrever{width:250px;}

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