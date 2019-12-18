<html>

<head>
	<title>IMC</title>
	<meta charset="UTF-8" />
	<style type="text/css">
		body {
			background-color: #ccc;
		}

		fieldset,
		#resp {
			display: block;
			position: relative;
			margin: 0 auto;
		}

		fieldset {
			background-color: #fff;
			width: 250px;
			height: 280px;
			text-align: center;
			box-shadow: 5px 5px #808080;
		}

		legend {
			background-color: #808080;
			color: white;
			width: 80px;
		}

		input {
			width: 88px;
		}

		label {
			font-weight: bolder;
		}

		input#peso,
		input#altura {
			width: 180px;
		}

		#botao1,
		#botao2 {
			background-color: #808080;
			color: white;
			font-weight: bold;
		}

		#resp {
			text-align: center;
		}
	</style>
	<script type="text/javascript" src="./jquery.js"></script>
	<script type="text/javascript">
		$(function() {
			$("#botao1").click(function() {
				var peso = $("#peso").val();
				var altura = $("#altura").val();
				if ((peso > 50 && peso < 250) && (altura >= 1 && altura <= 2.5)) {
					console.log(peso);
					console.log(altura);
					$.ajax({
						url: 'teste03-2.php',
						type: 'POST',
						data: {
							peso: peso,
							altura: altura
						},
						success: function(mostrar) {
							$('#resp').html(mostrar)
								.css({
									"color": "black",
									"font-weight": "normal"
								});
						}
					});
					/*$.post("./teste03-2.php", {
						peso: peso,
						altura: altura
					}, function(mostrar) {
						$('#resp').html(mostrar)
						.css({"color":"black","font-weight":"normal"});
					})*/
				} else {
					$('#resp').html("<p>Dados incorretos<p>")
						.css({
							"color": "red",
							"font-weight": "bold"
						});
				}
			});
			$("#botao2").click(function() {
				$('#resp').html("<p>Resposta<p>")
					.css({
						"color": "black",
						"font-weight": "normal"
					});
			});
		})
	</script>
</head>

<body>
	<form method="POST">
		<fieldset>
			<legend>
				<h3>ICM</h3>
			</legend><br>
			<label><input id="peso" type="number" step="0.1" placeholder="Digite Seu Peso (Kg)" /></label><br><br>
			<label><input id="altura" type="number" step="0.1" placeholder="Digite Sua Altura (m)" /></label><br><br>
			<input id="botao1" type="button" value="CALCULAR">&nbsp;
			<input id="botao2" type="reset" value="APAGAR"><br><br>
			<div id="resp">
				<p>Resposta</p>
			</div>
		</fieldset>
	</form>

</body>

</html>