<?php
include("includes.php");
$sis = new Sistema;
$id = $_POST['idd'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$sql = "UPDATE $sis->tabela SET nome = '$nome', email = '$email' , telefone = '$tel' WHERE id = '$id'";
$resposta = $sis->conexao()->query($sql);
if ($resposta) {
    print "<script>window.location.href='?p=alterar'</script>";
} else {
    print "<p><b>ERRO ao alterar !!!</b></p>";
}
