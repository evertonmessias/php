<?php
require_once './teste11-1.php';
extract($_POST);
$eq = new Eq2grau($a, $b, $c);
$resposta = $eq->calcular();
echo "<p><b>{$resposta[0]}</b></p>";
echo "<p>Delta = {$resposta[1]}, 
x<sub>1</sub> = {$resposta[2]}, 
x<sub>2</sub> = {$resposta[3]}
</p>";
