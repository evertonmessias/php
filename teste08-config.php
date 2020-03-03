<?php

$tabela1 = 'login';
$tabela2 = 'pessoas';

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