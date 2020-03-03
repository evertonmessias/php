<?php

$tabela1 = 'login';
$tabela2 = 'pessoas';
if(isset($_SESSION['server'])){servidor($_SESSION['server']);}

function conexaoPDO(){    
    $dsn = "mysql:dbname=" . banco . ";host=" . servidor . "";
try {
    return new PDO($dsn, usuario, senha);
} catch (Exception $e) {
    echo "<p>*********ERRO ao se conectar*********</p>";
    echo "<p>" . $e->getMessage() . "</p>";
}
}
function consulta($conexaoPDO, $tabela, $campo, $valor)
{
    $busca = false;
    $sql = "SELECT * FROM $tabela WHERE $campo = '$valor'"; //$valor = ?
    $result = $conexaoPDO->query($sql);    
    foreach ($result as $linha) {
        if ($linha[$campo] == $valor) $busca = true;
    }
    return $busca;
}
?>