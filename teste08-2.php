<?php
include 'config.inc';
session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['pass'])) {
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
	header('location:./teste08.html');
} else {
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
	$conexao = mysqli_connect($servidor, $usuario, $senha, $tabela); // conecta
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width">
	<title>MySQL</title>
	<style type="text/css">
		body {
			background-color: #ccc;
			font-family: Arial;
			font-size: 18px;
		}

		#site {
			position: relative;
			display: block;
			margin: 0 auto;
			width: 620px;
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
			width: 590px;
			height: 100%;
			margin: 0 auto;
		}

		legend {
			font-weight: bold;
			text-align: center;
		}

		.campo {
			display: block;
			position: relative;
			width: 250px;
			margin-bottom: 15px;
			margin: 0 auto;
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
	<div id="site">
		<h5><?php print "OK, usuario: $user" ?></h5>
		<hr>
		<!-- *************************** ADD USER *********************************** -->
		<form method="POST">
			<fieldset id="form1">
				<legend>Cadastrar</legend><br><br>
				<p class="campo">User :&ensp;<input type="text" id="user" name="nuser" placeholder=" Usuario" required /></p><br>
				<p class="campo">Pass :&ensp;<input type="password" id="pass" name="npass" placeholder=" Senha" required /></p><br>
				<p><input type="submit" id="botao" name="add_user" value="CADASTRAR" /></p>
				<?php
				if (isset($_POST['add_user'])) {
					$nuser = $_POST['nuser'];
					$npass = $_POST['npass'];
					$npassMD5 = md5($npass);
					$sql0 = "SELECT * FROM login WHERE user = '$nuser'";
					$result = mysqli_query($conexao, $sql0);
					if (mysqli_num_rows($result) > 0) {
						print "<h5>Erro => $nuser => JÁ EXISTE ! </h5>";
					} else {
						$sql1 = "INSERT INTO login (id, user, pass) VALUES (default, '$nuser', '$npassMD5')";
						mysqli_query($conexao, $sql1);
						print "<h5>Adicionado: $nuser , senha: $npass </h5>";
					}
				}
				?>
			</fieldset>
		</form>

		<!-- *************************** DEL USER *********************************** -->
		<form method="POST">
			<fieldset id="form2">
				<legend>Apagar</legend><br><br>
				<p class="campo">User :&ensp;<input type="text" id="user" name="user" placeholder=" Usuario" required /></p><br>
				<br><br>
				<p><input type="submit" id="botao" name="del_user" value="APAGAR" /></p>
				<?php
				if (isset($_POST['del_user'])) {
					$user = $_POST['user'];
					$sql2 = "SELECT * FROM login WHERE user = '$user'";
					$result = mysqli_query($conexao, $sql2);
					if (mysqli_num_rows($result) > 0) {
						$sql22 = "DELETE FROM login WHERE user = '$user'";
						mysqli_query($conexao, $sql22);
						print "<h5>Usuario Apagado => $user </h5>";
					} else {
						print "<h5>Usuario Não Encontrado !! </h5>";
					}
				}
				?>
			</fieldset>
		</form>

		<!-- *************************** CONSULTA *********************************** -->
		<form method="POST">
			<fieldset id="form3">
				<legend>Consultar</legend><br><br>
				<p><input type="submit" id="botao" name="consultar" value="CONSULTAR" /></p>
				<?php
				if (isset($_POST['consultar'])) {
					$sql3 = "SELECT login.user, pessoas.nomecompleto from login LEFT JOIN pessoas ON login.id = pessoas.idlogin";
					$query = mysqli_query($conexao, $sql3); // captura os dados
					while ($vetor = mysqli_fetch_array($query)) {			 // matriz_de_busca ; traz um por um das linhas de registros
						print "<h5 class='cons'> $vetor[0] - $vetor[1] </h5><br>";
					}
				}
				?>
			</fieldset>
		</form>
		<br>
		<hr>
	</div>
</body>

</html>