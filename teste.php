<?php

// ANOTAÇÕES

//Obs.: curl -o temp.html http://portfolio.em/testes/php/teste.php

if(@$_GET['dia'] && @$_GET['mes'] && @$_GET['ano']){
    $hoje = @$_GET['ano']."-".@$_GET['mes']."-".@$_GET['dia'];    
}else{$hoje = 'now';}

$formato = 'd/m/Y H:i:s';

echo "<h1>10:00:00 - quinta 16 janeiro 2020</h1>";
echo "<h1>1579179600</h1>";
$timestamp = 1579179600;
$formato = 'd-m-Y H:i:s';
$data = new DateTime('NOW', new DateTimeZone('America/Recife'));
$data->setTimestamp($timestamp);
echo $data->format($formato);

echo "<br>";echo "<hr>";echo "<br>";

$futuro = new DateTime($hoje, new DateTimeZone('America/Recife'));
echo $futuro->format($formato);
echo "<br>";
echo $futuro->getTimestamp();
echo "<br>";
$futuro->add(new DateInterval('P10D')); // add 10 dias
echo $futuro->format($formato);
echo "<br>";
echo $futuro->getTimestamp();

// *************************************************************

$arq = @$_GET['arq'];

function lerArquivo($pathArquivo){
    $html = fopen($pathArquivo,'r');
    $conteudo = '';
    while(!feof($html)) {
        $conteudo = $conteudo . fgets($html);
    }
    fclose($html);
    return $conteudo;
}

$msg = lerArquivo($arq);

$cabecalho = 'MIME-Version: 1.0' . "\r\n";
$cabecalho .= 'Content-type: text/html; charset=iso-8859-1;' . "\r\n";

$destino = 'everton.messias@gmail.com';
$assunto = 'RESERVAS IC - Tarefas da Semana';

$enviar = mail($destino, $assunto, $msg, $cabecalho);

if($enviar){echo "<h1 style='text-align: center;text-decoration: underline;'>CONTEUDO ENVIADO:</h1>".$msg;}
else{echo "Erro - Mensagem não Enviada !";}