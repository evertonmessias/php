<?php
include("includes.php");
$sis = new Sistema;
$chek = $_POST['chek'];
$idd = $_POST['idd'];
$vetor = explode(',', $idd);
$id = 0;
for ($i = 0; $i < $chek; $i++) {
    $id = $vetor[$i];
    $sql = "DELETE FROM $sis->tabela WHERE id = '$id'";
    $result = $sis->conexao()->query($sql);
}
if ($result) {
    print "<script>window.location.href='?p=apagar'</script>";
} else {
    echo "<p><b>ERRO ao apagar !!!</b></p>";
}
