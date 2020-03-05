<?php
include 'includes.php';
include '../config.php';
$sis = new Sistema;
$sis->sessaoo();
servidor($_SESSION['server']);
$idd = $_POST['idd'];
$sql = "DELETE FROM $sis->tabela WHERE id = '$idd'";
$result = $sis->conexao()->query($sql);
if ($result) {
    print "<script>window.location.href='?p=apagar'</script>";
} else {
    echo "<p><b>ERRO ao apagar !!!</b></p>";
}
