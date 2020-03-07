<?php
include 'config.php';
$nome = @$_POST['nome'];
$senha = @$_POST['senha'];
Sistema::conexao();
$criptosenha = md5($senha);
$sql = "SELECT * from login where user='$nome' and pass='$criptosenha'";
$resultado = Sistema::conexao()->query($sql);
 $busca = false;
 foreach ($resultado as $linha) {
     if ($linha['user'] == $nome && $linha['pass'] == $criptosenha) $busca = true;
 }
if ($busca) {
    session_start();
    $_SESSION['snome'] = $nome;
    print "<script>window.location.href='../'</script>";
} else {
    print "<p><b>ERRO - Usuario ou senha invalidos</b></p>";
}