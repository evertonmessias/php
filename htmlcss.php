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
				.login,
				#sitemysql,
				table.arquivos {
					display: block;
					position: relative;
					margin: 0 auto;
				}

				#area {
					width: 950px;
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

				.index
				 {
					margin: 0 auto;
					min-height: 400px;
				}
				.form {
					margin: 0 auto;
					height: 280px;
				}

				.f0 {
					margin: 0 auto;
					height: 240px;
				}

				.f1 {
					width: 500px;
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
				}
				small.file{
					left:110px
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

				.servidor {
					margin-top:-10px;
					margin-left: 120px;
					font-size: 13px;
				}

				.servidor input {
					margin: 0;
					padding: 0;
					left: -20px;
					top: 14px;
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
				#sitemysql{
					width: 650px;
				}

				h5 {
					position: relative;
					display: block;
					width: 260px;
					margin: 0 auto;
					text-align: center;
				}

				h5.cons {
					width: 300px;
					border: 1px solid #bbb;
					padding: 5px;
					text-align: left;
				}

				#form1,
				#form2,
				#form3 {
					display: block;
					position: relative;
					background-color: #ddd;
					box-shadow: 3px 3px 5px black;
				}

				#form1 {
					top: 5px;
					width: 275px;
					height: 250px;
					float: left;
				}

				#form2 {
					top: 5px;
					width: 275px;
					height: 250px;
					float: right;
				}

				#form3 {
					top: 10px;
					width: 600px;
					height: 100%;
					margin: 0 auto;
				}

				legend {
					font-weight: bold;
					text-align: center;
				}

				.campo1, .campo2 {
					display: block;
					position: relative;
					width: 250px;
					margin-bottom: 15px;
					margin: 0 auto;
				}
				table.arquivos{
					width: 420px;
					margin: 0 auto;
					font-size: 12px;
					border-spacing: 0px;
					text-align: left;
				}
				table.arquivos .col1{
					width: 350px;
				}
				table.arquivos td,table.arquivos th{
					padding-left: 4px;									
					border: 1px solid #404040;
				}
				table.arquivos th{
					background-color: #ccc;
				}
				#user,
				#pass {
					background-color: #fff;
					width: 170px;
				}

				#botao {
					display: block;
					position: relative;
					width: 120px;
					margin: 0 auto;
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
