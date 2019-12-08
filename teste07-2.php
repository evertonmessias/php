<?php
session_start();
if(!isset($_SESSION['valor2'])) {
unset($_SESSION['valor2']);
header('location:./teste07.php');}
else {
$val = $_SESSION['valor2'];
print "O valor da Session é $val<br>";
print "Session destruida !!<br>";
unset($_SESSION['valor2']);}
?>
<a href="./teste07.php"> <= Voltar </a>