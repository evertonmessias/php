<?php

//Obs.: curl -o temp.html http://portfolio.em/testes/php/teste.php

if(@$_GET['dia'] && @$_GET['mes'] && @$_GET['ano']){
    $hoje = @$_GET['ano']."-".@$_GET['mes']."-".@$_GET['dia'];    
}else{$hoje = 'now';}

$formato = 'd/m/Y H:i:s';


echo "<h1>10:00:00 - quinta 16 janeiro 2020</h1>";
echo "<h1>1579179600</h1>";
$timestamp = 1579179600;
$formato = 'd-m-Y H:i:s';
$data = new DateTime('NOW', new DateTimeZone('America/Recife'));
$data->setTimestamp($timestamp);
echo $data->format($formato);

echo "<br>";echo "<hr>";echo "<br>";

$futuro = new DateTime($hoje, new DateTimeZone('America/Recife'));
echo $futuro->format($formato);
echo "<br>";
echo $futuro->getTimestamp();
echo "<br>";
$futuro->add(new DateInterval('P10D')); // add 10 dias
echo $futuro->format($formato);
echo "<br>";
echo $futuro->getTimestamp();