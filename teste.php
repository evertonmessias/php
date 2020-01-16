<?php

// curl -o temp.html http://portfolio.em/testes/php/teste.php

echo "<h1>10:00:00 - quinta 16 janeiro 2020</h1>";
echo "<h1>1579179600</h1>";

$timestamp = 1579179600;
$formato = 'd-m-Y H:i:s';

$data = new DateTime('NOW', new DateTimeZone('America/Recife'));
$data->setTimestamp($timestamp);
echo $data->format($formato);

echo "<br>";echo "<br>";

$futruro = new DateTime('NOW', new DateTimeZone('America/Recife'));
$futruro->add(new DateInterval('P10D')); // add 10 dias
echo $futruro->format($formato);
echo "<br>";
echo $futruro->getTimestamp();

?>