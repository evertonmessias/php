<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title> Lutadores </title>
</head>
<body><pre>
<?php    
 
require_once './teste12-1.php';
require_once './teste12-2.php';

$l = array();

$l[0] = new Lutador('Magrão', 'Brasil', 30, 1.8, 80, 5, 1, 2);

$l[1] = new Lutador('Dede', 'Alemanha', 25, 1.7, 70, 6, 0, 1);

$l[2] = new Lutador('Ze', 'Portugal', 28, 1.75, 76, 9, 2, 2);


$luta = new Luta();

$luta->marcarLuta($l[0], $l[2]);

$luta->lutar();

$l[0]->status();$l[2]->status();


?> </pre>   
</body>
</html>

