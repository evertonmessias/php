<?php
include 'includes.php';
include 'config.php';
$sis = new Sistema;
$sis->sessaoo();
servidor($_SESSION['server']);
extract($_POST);
$sql = "UPDATE $sis->tabela SET nome = '$nome', email = '$email' , telefone = '$tel' WHERE id = '$idd'";
$resposta = $sis->conexao()->query($sql);
if ($resposta) {
    print "<script>window.location.href='?p=alterar'</script>";
} else {
    print "<p><b>ERRO ao alterar !!!</b></p>";
}
