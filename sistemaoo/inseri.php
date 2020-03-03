<?php
include("includes.php");
$sis = new Sistema;
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$sql = "INSERT INTO $sis->tabela (id, nome, telefone, email) VALUES (default, '$nome', '$tel', '$email')";
$resposta = $sis->conexao()->query($sql);
if ($resposta) {
    print "<script>window.location.href='?p=consultar'</script>";
} else {
    print "<p><b>Algum ERRO ocorreu !!!</b></p>";
}
