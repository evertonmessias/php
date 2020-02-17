<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<title>Envio de Arquivo</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript"></script>

	<style type="text/css">
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
	<form method="POST" enctype="multipart/form-data">
		<fieldset>
			<legend>
				<h2>Envio de Arquivo</h2>
			</legend>
			<input type="hidden" name="MAX_FILE_SIZE" value="1048576‬">
			<input type="file" name="arquivo">
			<small>Tamanho máx. 1MB</small>
			<br>
			<input type="submit" class="botao" name="botao" value="Enviar" />
			<br>
			<div class="resp">
				<?php
				if (isset($_POST['botao'])) {
					$arquivo = $_FILES['arquivo'];
					echo "Nome: " . $arquivo['name'] . "<br>";
					echo "Tamanho: " . $arquivo['size'] . "<br>";
					echo "Tipo: " . $arquivo['type'] . "<br>";
					echo "Nome Temp: " . $arquivo['tmp_name'] . "<br>";
					echo "Erro: " . $arquivo['error'] . "<br><br>";

					if ($arquivo['type'] == "image/png" || $arquivo['type'] == "image/jpeg") {
						$envio = move_uploaded_file($arquivo['tmp_name'], "img/" . $arquivo['name']);
						if ($envio) {
							echo "<span class='ok'>SUCESSO:</span><br><br>";
							echo "<a href='img/" . $arquivo['name'] 
							."' target='_blank'><img src='img/" . $arquivo['name'] 
							. "' title='" . $arquivo['name'] 
							. "'></a><br>";
						}
					}else{
						echo "<span class='ko'>Não é uma foto</span>";
					}
				}
				?>
			</div>
		</fieldset>
	</form>
</body>

</html>