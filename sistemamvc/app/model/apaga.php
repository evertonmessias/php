<?php
include 'config.php';
$tab = Sistema::$tabela1;
$idd = $_POST['idd'];
$sql = "DELETE FROM $tab WHERE id = '$idd'";
$result = Sistema::conexao()->query($sql);
if ($result) {
    print "<script>window.location.href='?p=apagar'</script>";
} else {
    echo "<p><b>ERRO ao apagar !!!</b></p>";
}
