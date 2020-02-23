<?php
namespace inicio {
	function site()
	{
?>
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
				.resp,
				.login {
					display: block;
					position: relative;
					margin: 0 auto;
				}

				#area {
					width: 820px;
					height: 480px;
				}

				fieldset {
					display: block;
					position: relative;
					top: 50px;
					width: 350px;
					padding: 20px;
					background-color: #fff;
				}

				.index {
					margin: 0 auto;
					min-height: 400px;
				}

				.f0 {
					margin: 0 auto;
					height: 240px;
				}

				.f1 {
					float: left;
					min-height: 400px;
				}

				.f2 {
					float: right;
					min-height: 400px;
				}

				legend {
					font-weight: bold;
					text-align: center;
				}

				input,
				small {
					top: -20px;
				}

				.escrever {
					width: 250px;
				}

				small {
					font-size: 10px;
					left: 35px;
				}

				.login {
					top: -40px;
					;
					text-align: center;
					font-size: 10px;
				}

				.erro {
					color: #f00;
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

				.ok {
					font-weight: bolder;
					color: darkgreen
				}

				.ko {
					font-weight: bolder;
					color: red
				}

				ul {
					list-style: none;
				}

				li {
					text-align: left;
					margin-left: -35px
				}

				a {
					color: blue;
					text-decoration: none;
				}

				a:hover {
					color: red;
				}

				@media (max-width: 720px) {
					body {
						font-size: 20px;
					}

				}
			</style>
		</head>

		<body>
	<?php
	}
}
namespace fim {
	function site()
	{
		return "</body></html>";
	}
}
