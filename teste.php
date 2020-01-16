<?php

echo "<h1>10:00:00 - quinta 16 janeiro 2020</h1>";
echo "<h1>1579179600</h1>";

$timestamp = 1579179600;
$formato = 'Y-m-d H:i:s';

$data = new DateTime('NOW', new DateTimeZone('America/Recife'));
$data->setTimestamp($timestamp);
echo $data->format($formato);
?>