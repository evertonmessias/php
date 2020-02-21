<?php
session_start();
$val = $_SESSION['string'];
print "<p>O valor da Session é ==> $val</p>";
print "Session destruida !!<br>";
unset($_SESSION['string']);
?>
<br>
<a href="./teste07.php"> <= Voltar </a>