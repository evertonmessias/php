<?php
$arq = $_GET['file'];
function lerArquivo($arq)
{
    $i = 1;
    $arquivo = fopen($arq, 'r');
    if ($arquivo == false) {
        echo ('Não foi possível abrir o arquivo.');
    } else {
        while (true) {
            $linha = fgets($arquivo);
            echo "<!-- $linha -->";
            $i++;
            if ($linha == null) break;
        }
        fclose($arquivo);
    }
}
lerArquivo($arq);
?>