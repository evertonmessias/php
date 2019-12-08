<?php
include("includes.php");
$sis = new Sistema;
$nome = @$_POST['nome'];
$senha = @$_POST['senha'];

$criptosenha = md5($senha);
$sql = "select * from login where user='$nome' and pass='$criptosenha'";
$resultado = mysqli_query($sis->conexao(), $sql);
if (mysqli_num_rows($resultado) > 0) {
    session_start();
    $_SESSION['snome'] = $nome;
    print "<script>window.location.href='menu.php'</script>";
} else {
    print "<p><b>ERRO - Usuario ou senha invalidos</b></p>";
}