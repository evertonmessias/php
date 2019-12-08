<html>

<!-- Função date()
para inserir no site use : include("site.php");
$sem = date ("w");
echo "$sem<br><br>";

$SEM = array("domingo","segunda-feira","terça-feira","quarta-feira","quinta-feira","sexta-feira","sábado");

$dia = date("d");
echo "$dia<br><br>";

$mes = date("m");
echo "$mes<br><br>";

$MES = array("01"=>"janeiro","02"=>"fevereiro","03"=>"março","04"=>"abril","05"=>"maio","06"=>"junho","07"=>"julho","08"=>"agosto","09"=>"setembro","10"=>"outubro","11"=>"novembro","12"=>"dezembro");
$ano = date("Y");
echo ">>>>>    $SEM[$sem], $dia de $MES[$mes] de $ano   <<<<<<<<<"; -->

<?php

$sem = date ("w");
echo "$sem<br><br>";
$SEM = array("domingo","segunda-feira","terça-feira","quarta-feira","quinta-feira","sexta-feira","sábado");
$dia = date("d");
echo "$dia<br><br>";
$mes = date("m");
echo "$mes<br><br>";
$MES = array("01"=>"janeiro","02"=>"fevereiro","03"=>"março","04"=>"abril","05"=>"maio","06"=>"junho","07"=>"julho","08"=>"agosto","09"=>"setembro","10"=>"outubro","11"=>"novembro","12"=>"dezembro");
$ano = date("Y");
echo ">>>>>    $SEM[$sem], $dia de $MES[$mes] de $ano   <<<<<<<<<";

?>

</html>