<?php
include 'config.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$idd = $_POST['idd'];
$tab = Sistema::$tabela1;
$sql = "UPDATE $tab SET nome = '$nome', email = '$email' , telefone = '$tel' WHERE id = '$idd'";
$resposta = Sistema::conexao()->query($sql);
if ($resposta) {
    print "<script>window.location.href='?p=alterar'</script>";
} else {
    print "<p><b>ERRO ao alterar !!!</b></p>";
}
