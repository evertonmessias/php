<?php
include 'includes.php';
include 'config.php';
$sis = new Sistema;
$nome = @$_POST['nome'];
$senha = @$_POST['senha'];
$server = @$_POST['server'];
servidor($server);

$criptosenha = md5($senha);
$sql = "select * from login where user='$nome' and pass='$criptosenha'";
$resultado = $sis->conexao()->query($sql);
$busca = false;
foreach ($resultado as $linha) {
    if ($linha['user'] == $nome && $linha['pass'] == $criptosenha) $busca = true;
}
if ($busca) {
    session_start();
    $_SESSION['snome'] = $nome;
    $_SESSION['server'] = $server;
    print "<script>window.location.href='menu.php'</script>";
} else {
    print "<p><b>ERRO - Usuario ou senha invalidos</b></p>";
}