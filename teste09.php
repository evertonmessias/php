<?php

include ("teste09-1.php");

$c1 = new Caneta("Pentel",0.5);

print "Minha caneta é: ". $c1->getModelo() . " e a ponta é: " . $c1->getPonta();

echo "<br>";

$c1->setModelo("BIC"); // publico, poderia ser: $c1->modelo = "BIC";
$c1->setPonta(1); // privado, só pode por setter

print "Agora minha caneta é: ". $c1->getModelo() . " e a ponta é: " . $c1->getPonta();

?>

