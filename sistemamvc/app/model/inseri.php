<?php
include 'config.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$tab = Sistema::$tabela1;
$sql = "INSERT INTO $tab (id, nome, telefone, email) VALUES (default, '$nome', '$tel', '$email')";
$resposta = Sistema::conexao()->query($sql);
if ($resposta) {
    print "<script>window.location.href='?p=inserir'</script>";
} else {
    print "<p><b>Algum ERRO ocorreu !!!</b></p>";
}