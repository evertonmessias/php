<?php
require_once './vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setNome("notebook Dell");
$produto->setDescricao('i5, 4G');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->create($produto);

?>