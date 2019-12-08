<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="utf-8">
<title>Conta Bancaria</title>
</head>
<body>
<pre>
<?php
require ("teste10-1.php");

$p1 = new ContaBanco();
$p2 = new ContaBanco();

$p1->abrirConta(1,"Jubiléu","CC");

$p2->abrirConta(2,"Creuza","CP");

$p1->depositar(300);
$p2->sacar(100);

$p1->pagarMensal();
$p2->pagarMensal();

print_r($p1);print_r($p2);

?>
</pre>
</body></html>
