<?php
include 'app/core/core.php';
include 'app/controller/menu.php';
$head = file_get_contents('app/template/head.html');
$nav_content = file_get_contents('app/template/nav_content.html');
echo $head;

ob_start(); // inicio captura do navegador
$core = new Core;
$core->start($_GET);
$saida = ob_get_contents();
ob_end_clean(); // fim captura do navegador

$conteudo = str_replace('{{conteudo}}',$saida,$nav_content);
echo $conteudo;
