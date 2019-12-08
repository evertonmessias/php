<?php
require_once './teste13-1.php';
extract($_POST);
if (isset($botao)){
$eq = new Eq2grau($a,$b,$c);
echo "<p class='resp'>".$eq->calcular()[0]."</p>";
echo "<p class='resp'>&Delta;&nbsp;=&nbsp;"
.$eq->calcular()[1]."&nbsp;,&ensp;x<sub>1</sub>&nbsp;=&nbsp;"
        .$eq->calcular()[2]."&nbsp;,&ensp;x<sub>2</sub>&nbsp;=&nbsp;"
                .$eq->calcular()[3]."</p>";}
