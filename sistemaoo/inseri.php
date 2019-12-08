<?php
include("includes.php");
$sis = new Sistema;
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$sql = "INSERT INTO $sis->tabela (id, nome, email, tel) VALUES (default, '$nome', '$email', '$tel')";
$resposta = mysqli_query($sis->conexao(), $sql);
if ($resposta) {
    print "<script>window.location.href='?p=consultar'</script>";
} else {
    print "<p><b>Algum ERRO ocorreu !!!</b></p>";
}
