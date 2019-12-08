<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="utf-8">
<title>Controle Remoto</title>
</head>
<body>
<h1>Controle Remoto</h1><pre>
<?php
require ("teste11-1.php");

$c = new ControleRemoto();
$c->ligar();
$c->abrirMenu();

$c->maisVolume();$c->maisVolume();
$c->maisVolume();$c->maisVolume();

$c->play();
$c->abrirMenu();

?></pre>
</body></html>
