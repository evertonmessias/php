<?php

//PHP (PHP Hypertext Preprocessor) :Linguagem de programação interpretada 
// Sintaxes Básicas 

echo "<a href='./index.php' target='_blank'><h3>Codigos Fonte</h3></a>";


echo "<fieldset style='width:50%;'><legend><strong>Declaração de Variáveis</strong></legend><br>";

// PHP não se preocupa com declaração de variáveis  **************

$nome = "José"; // typecast String
$idade = 42; // typecast Int
$salario = 3650.40; // typecast Float ou Double
$casado = true; // typecast Booleano
$int_casado = (int) $casado;

echo "Nome: $nome, $idade de idade e salário de R$ $salario / Resposta Casado ? = $int_casado .<br><br>";
echo "<br><br></fieldset>";
echo "<br><br>";

echo "<fieldset style='width:50%;'><legend><strong>Condições e Repetição</strong></legend><br>";

// Condições *******************************************************

echo ($idade >= 18) ? "VOTA" : "Não vota";

echo "<br>";


if ($casado) {
	echo "É casado!";
} else {
	echo "Não é casado!";
}

echo "<br>";

switch ($idade) {
	case ($idade < 20):
		echo "Tomar vacinas de 20 anos";
		break;
	case ($idade >= 20):
		echo "Tomar vacinas de 30 anos";
		break;
	default:
		echo "Não tomar vacinas";
}

echo "<br>";

// Repetição ******************************************************

$contador = 1;

while ($contador < 10) {
	echo $contador . "<br>";
	$contador += 1; // $contador++
}

echo "<br>";

do {
	echo $contador . "<br>";
	$contador--;
} while ($contador >= 1);

echo "<br>";

for ($i = 0; $i <= 10; $i++) {
	echo $i . ",&nbsp;";
}

echo "<br><br></fieldset>";
echo "<br><br>";

echo "<fieldset style='width:50%;'><legend><strong>Funções</strong></legend><br>";

// Função, passagem por valor e referência ****************************

function somador($valor_a, $valor_b, &$soma, &$subtracao, &$multiplicacao, &$divisao)
{
	$soma = $valor_a + $valor_b;
	$subtracao = $valor_a - $valor_b;
	$multiplicacao = $valor_a * $valor_b;
	$divisao = $valor_a / $valor_b;
	// Efeito tipo multiplos return
}

somador(10, 5, $mais , $menos, $vezes, $dividir);
echo "Passagem por Valor e Referência<br>";
echo $mais."<br>";
echo $menos."<br>";
echo $vezes."<br>";
echo $dividir;

echo "<br><br></fieldset>";
echo "<br><br>";


echo "<fieldset style='width:50%;'><legend><strong>Arrays</strong></legend><br>";

// Array (vetores e matrizes) ****************************************************************

$vetor = [1, 2, 3, 4];  //$vetor = array(1,2,3,4);

print_r($vetor);

echo "<br>";

$vetor[] = 5;

print_r($vetor);

echo "<br><br>";

$v = range(2, 20, 2); // vetor de 2 a 20 ... pulando de 2 - 2

print_r($v);

echo "<br><br><br>";

$fruta[0] = "banana";
$fruta[1] = "laranja";
$fruta['é_fruta_sim'] = "tomate";

print_r($fruta);

echo "<br><br>";

$fruta['outra_fruta'] = "morango";

print_r($fruta);

echo "<br><br>";

foreach ($fruta as $lista_frutas) {
	echo $lista_frutas . "<br>";
}

echo "<br><br>";

$semana = array("dia1" => "segunda", "dia2" => "terça", "dia3" => "quarta");

foreach ($semana as $d => $s) {
	echo "o indice $d possui o conteudo $s <br>";
}

echo "<br><br>";

$matriz = array(
	array(1, 2),
	array(3, 4),
	array(5, 6)
);
print_r($matriz);
echo "<br>MATRIZ 0,1 => " . $matriz[0][1];

echo "<br><br>";
echo "<br><br>";

echo "<br><br></fieldset>";
echo "<br><br>";

echo "<fieldset style='width:50%;'><legend><strong>Strings</strong></legend><br>";

// String (são muitas, melhor pesquisar qdo precisar !! *********************

$txt = "ARQUIVOS com php";

echo $txt;

echo "<br><br>";

echo strrev($txt); // reverso

echo "<br><br>";

echo strlen($txt); // contagem

echo "<br><br>";

echo str_replace('ARQUIVOS com', 'programas em', $txt); // substitui

echo "<br><br>";

echo substr($txt, 0, 8); // busca

echo "<br><br>";

$txt2 = 'frase qualquer';
echo strtoupper($txt2) . '<br>'; // tudo maiúsculo
echo strtolower($txt2) . '<br>'; // tudo minúsculo
echo ucfirst($txt2); // primeira letra maiúsculo

echo "<br><br>";

$frases = array('frase1', 'frase2', 'frase3');
$todas_frases = implode(' - ', $frases);
echo $todas_frases;
echo "<br><br>";
$nomes = "everton,dhora,clelia,erika";
$array_nomes = explode(',', $nomes);
foreach ($array_nomes as $n) {
	echo $n . '<br>';
}

echo "<br><br>";

echo chr(67) . "<br>";
echo chr(99); // tabela ASCII
echo "<br><br>";
echo ord('C') . "<br>";
echo ord('c');

echo "<br><br>";
echo "******************* ER & VALIDAÇÃO *******************";
echo "<br><br>";
// Expressão Regular
$email = 'nome@dominio.com';
echo $email . '<br>';
$testmail = preg_match('/^\w+([\.-]\w+)*@\w+\.(\w+\.)*\w{2,3}$/', $email); // ER valida email
echo $testmail;

echo "<br><br>";

// Strings e Validação, ex de manipulacao string,
// para testar coloque na URL nome e mail
$nome = @$_GET['nome'];
$mail = @$_GET['mail'];
if (!isset($_GET['nome'])){  //  <== isset bom pra varios submit
	print "ERRO - Variavel nome nao iniciada<br>";}
elseif (is_numeric($nome)){
	print "ERRO - Variavel nome eh numerica<br>";}
else{
	print 'OK, nome: ' . $nome . '<br>';}
if (!$mail) {
	print "ERRO - Variavel mail VAZIA<br>";
} elseif (strlen($mail) < 8) {
	print "ERRO - Variavel mail mto CURTO<br>";
} elseif (substr_count($mail, '@') != 1) {
	print "ERRO - Variavel mail com arrobas IRREGULAR<br>";
} elseif (!substr_count($mail, '.')) {
	print "ERRO - Variavel mail sem ponto<br>";
} elseif (strstr($mail, ' ')) {
	print "ERRO - Variavel mail tem algum espaço<br>";
} else {
	print 'OK, mail: ' . $mail . '<br>';
}

echo "<br><br></fieldset>";
echo "<br><br>";

echo "<fieldset style='width:50%;'><legend><strong>DATA & HORA</strong></legend><br>";
//Funçoes de tempo

echo "<b>time() => " . time() . "</b> (segundos desde 01/01/1970 as 0:00h)";
echo "<br><hr><br>";
// Localtime()
$tempo = localtime(time(), true);
echo "<b>\$tempo = localtime(time(),true);</b><br>";
echo "<b>segundos => </b>\$tempo['tm_sec'] => " . $tempo['tm_sec'] . "<br>";
echo "<b>minutos => </b>\$tempo['t_min'] => " . $tempo['tm_min'] . "<br>";
echo "<b>horas = => </b>\$tempo['t_hour'] => " . $tempo['tm_hour'] . "<br>";
echo "<b>dia = => </b>\$tempo['t_mday'] => " . $tempo['tm_mday'] . "<br>";
echo "<b>mês = => </b>\$tempo['t_mon'] => " . $tempo['tm_mon'] . "<br>";
echo "<b>anos desde 1900 => </b>\$tempo['t_year ='] => " . $tempo['tm_year'] . "<br>";
echo "<b>semana = => </b>\$tempo['t_wday'] => " . $tempo['tm_wday'] . "<br>";
echo "<b>dia ano = => </b>\$tempo['t_yday'] => " . $tempo['tm_yday'] . "<br>";
echo "<b>verão = => </b>\$tempo['t_isdst'] => " . $tempo['tm_isdst'] . "<br>";
echo "<br><hr><br>";
// getdate()
$datas = getdate();
echo "<b>getdate() => </b><br>";
print_r($datas);
echo "<br><hr><br>";
// DATE()
echo date('d-m-Y') . "<br>";
$sem = date("w");
$SEM = array("domingo", "segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sábado");
$dia = date("d");
$mes = date("m");
$MES = array("01" => "janeiro", "02" => "fevereiro", "03" => "março", "04" => "abril", "05" => "maio", "06" => "junho", "07" => "julho", "08" => "agosto", "09" => "setembro", "10" => "outubro", "11" => "novembro", "12" => "dezembro");
$ano = date("Y");
echo "$SEM[$sem], $dia de $MES[$mes] de $ano (problema de fuso horário!)";

echo "<br><hr>";

echo "<h3>Solução pra fuso horário:</h3>";

function _date($format, $timezone)
{
	$timestamp = false;
	$defaultTimeZone = 'UTC';
	if (date_default_timezone_get() != $defaultTimeZone) date_default_timezone_set($defaultTimeZone);
	$userTimezone = new DateTimeZone(!empty($timezone) ? $timezone : 'GMT');
	$gmtTimezone = new DateTimeZone('GMT');
	$myDateTime = new DateTime(($timestamp != false ? date("r", (int) $timestamp) : date("r")), $gmtTimezone);
	$offset = $userTimezone->getOffset($myDateTime);
	return date($format, ($timestamp != false ? (int) $timestamp : $myDateTime->format('U')) + $offset);
}
$dataVERDADEIRA = _date("d-m-Y , H:i:s", 'America/Sao_Paulo');
echo 'São Paulo: ' . $dataVERDADEIRA;
echo "<br><br></fieldset>";
echo "<br><br>";

