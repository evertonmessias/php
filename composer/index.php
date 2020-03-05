<?php
require_once './vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setNome("pcgamer HP");
$produto->setDescricao('i5, 8G');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->create($produto);

?>