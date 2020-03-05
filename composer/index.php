<!DOCTYPE html>
<html>
<head>
    <style>
        table{border-spacing: 0px;}
        td{padding: 3px; border:1px solid black;}
    </style>
</head>
<body>
<?php
require_once './vendor/autoload.php';
//comando: composer dumpautoload -o

$produto = new \App\Model\Produto();
// $produto->setNome("pcgamer HP");
// $produto->setDescricao('i5, 8G');

$produtoDao = new \App\Model\ProdutoDao();
// $produtoDao->create($produto);

function exibir($produtoDao){
echo "<table>";
foreach($produtoDao->read() as $produto){
    echo "<tr><td> {$produto['id']} </td><td> {$produto['nome']} </td><td> {$produto['descricao']} </tr>";
}
echo "</table>";
}

echo "<form method='POST'><br>
<input type='number' name='id'><br>
<input type='text' name='nome'><br>
<input type='text' name='descricao'><br><br>
<input type='submit' name='botao1' value='Update'><br><br>
</form>

<form method='POST'><br>
<input type='number' name='id'><br><br>
<input type='submit' name='botao2' value='Delete'><br><br>
</form>";

if (isset($_POST['botao1'])){
    $produto->setId($_POST['id']);
    $produto->setNome($_POST['nome']);
    $produto->setDescricao($_POST['descricao']);
    $produtoDao->update($produto);    
    exibir($produtoDao);
}
if (isset($_POST['botao2'])){
    $produtoDao->delete($_POST['id']);    
    if($produtoDao){
        echo "DELETADO";
    }
    exibir($produtoDao);
}
?>
</body>
</html>