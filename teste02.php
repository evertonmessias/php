<?php

//PHP (PHP Hypertext Preprocessor) :Linguagem de programação interpretada 


// Sintaxes Básicas **********************************************
//****************************************************************

echo "<fieldset style='width:50%;'><legend><strong>DATA & HORA</strong></legend><br>";
//Funçoes de tempo

echo "<b>time() => ".time()."</b> (segundos desde 01/01/1970 as 0:00h)";
echo "<br><hr><br>";
// Localtime()
$tempo = localtime(time(),true);
echo "<b>\$tempo = localtime(time(),true);</b><br>";
echo "<b>segundos => </b>\$tempo['tm_sec'] => ".$tempo['tm_sec']."<br>";
echo "<b>minutos => </b>\$tempo['t_min'] => ".$tempo['tm_min']."<br>";
echo "<b>horas = => </b>\$tempo['t_hour'] => ".$tempo['tm_hour']."<br>";
echo "<b>dia = => </b>\$tempo['t_mday'] => ".$tempo['tm_mday']."<br>";
echo "<b>mês = => </b>\$tempo['t_mon'] => ".$tempo['tm_mon']."<br>";
echo "<b>anos desde 1900 => </b>\$tempo['t_year ='] => ".$tempo['tm_year']."<br>";
echo "<b>semana = => </b>\$tempo['t_wday'] => ".$tempo['tm_wday']."<br>";
echo "<b>dia ano = => </b>\$tempo['t_yday'] => ".$tempo['tm_yday']."<br>";
echo "<b>verão = => </b>\$tempo['t_isdst'] => ".$tempo['tm_isdst']."<br>";
echo "<br><hr><br>";
// getdate()
$datas = getdate();
echo "<b>getdate() => </b><br>";
print_r($datas);
echo "<br><hr><br>";
// DATE()
echo date('d-m-Y')."<br>";
$sem = date("w");
$SEM = array("domingo","segunda-feira","terça-feira","quarta-feira","quinta-feira","sexta-feira","sábado");
$dia = date("d");
$mes = date("m");
$MES = array("01"=>"janeiro","02"=>"fevereiro","03"=>"março","04"=>"abril","05"=>"maio","06"=>"junho","07"=>"julho","08"=>"agosto","09"=>"setembro","10"=>"outubro","11"=>"novembro","12"=>"dezembro");
$ano = date("Y");
echo "$SEM[$sem], $dia de $MES[$mes] de $ano (problema de fuso horário!)";

echo "<br><hr>";

echo "<h3>Solução pra fuso horário:</h3>";

function _date($format, $timezone)
{
	$timestamp=false;
	$defaultTimeZone='UTC';
	if(date_default_timezone_get() != $defaultTimeZone) date_default_timezone_set($defaultTimeZone);
    $userTimezone = new DateTimeZone(!empty($timezone) ? $timezone : 'GMT');
    $gmtTimezone = new DateTimeZone('GMT');
    $myDateTime = new DateTime(($timestamp!=false?date("r",(int)$timestamp):date("r")), $gmtTimezone);
    $offset = $userTimezone->getOffset($myDateTime);
    return date($format, ($timestamp!=false?(int)$timestamp:$myDateTime->format('U')) + $offset);
}
$dataVERDADEIRA = _date("d-m-Y , H:i:s", 'America/Sao_Paulo');
echo 'São Paulo: '.$dataVERDADEIRA;
echo "<br><br></fieldset>";
echo "<br><br>";

// PHP não se preocupa com declaração de variáveis  **************

$nome = "José"; // typecast String
$idade = 42; // typecast Int
$salario = 3650.40; // typecast Float ou Double
$casado = true; // typecast Booleano
$int_casado = (integer)$casado;

echo "Nome: $nome, $idade de idade e salário de R$ $salario / Resposta Casado ? = $int_casado .<br><br>";


// Condições *******************************************************

echo ($idade >= 18)?"VOTA":"Não vota";

echo "<br>";


if($casado) {
	echo "É casado!";
}
else {
	echo "Não é casado!";
}

echo "<br>";

switch($idade) {
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

while($contador < 10) {
	echo $contador."<br>";
	$contador += 1; // $contador++
	}
	
echo "<br>";
	
do {
	echo $contador."<br>";
	$contador--;	
}while($contador >= 1);

echo "<br>";

for($i = 0;$i <= 10; $i++) {
	echo $i.",&nbsp;";}
	
echo "<br><br>";
	
// Função, passagem por valor e referência ****************************

function somador($a, $b, &$r) {
	$r = $a + $b;
}

$A = 4; $B = 3;

somador($A, $B, $R);

echo $R;

echo "<br><br>";

// Array (vetores e matrizes) ****************************************************************


$vetor = [1,2,3,4];  //$vetor = array(1,2,3,4);

print_r($vetor);

echo "<br>";

$vetor[] = 5;

print_r($vetor);

echo "<br><br>";

$v = range(2,20,2); // vetor de 2 a 20 ... pulando de 2 - 2

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

foreach($fruta as $lista_frutas){
	echo $lista_frutas."<br>";
}

echo "<br><br>";

$semana = array("dia1"=>"segunda","dia2"=>"terça","dia3"=>"quarta");

foreach($semana as $d => $s){
	echo "o indice $d possui o conteudo $s <br>";
}

echo "<br><br>";

$matriz = array(array(1,2),
					 array(3,4),
					 array(5,6)
);

echo "MATRIZ 0,1 ='] => ".$matriz[0][1];


echo "<br><br>";echo "<br><br>";

echo "<br><br>";

// String (são muitas, melhor pesquisar qdo precisar !! *********************

$txt = "Arquivo com PHP";

echo $txt;

echo "<br><br>";

echo strrev($txt); // reverso

echo "<br><br>";

$tamanho = strlen($txt); // contagem

echo $tamanho;

echo "<br><br>";

echo strtoupper($txt); // tudo maiúsculo

echo "<br><br>";

echo chr(67);echo chr(99); // tabela ASCII

echo "<br><br>";

echo ord('C');echo ord('c');

echo "<br><br>";echo "<br><br>";
echo "***************************************************************";
echo "<br><br>";

// Strings e Validação, ex de manipulacao string

$nome = @$_GET['nome'];$mail = @$_GET['mail'];
if (!isset($_GET['nome']))  //  <== isset bom pra varios submit
print "ERRO - Variavel nome nao iniciada";
elseif (is_numeric($nome))
print "ERRO - Variavel nome eh numerica";
else
print $nome."<BR>";
if (!$mail)
print "ERRO - Variavel mail VAZIA";
elseif (strlen($mail) < 8)
print "ERRO - Variavel mail mto CURTO";
elseif (substr_count($mail,'@')!=1)
print "ERRO - Variavel mail com arrobas IRREGULAR";
elseif (!substr_count($mail,'.'))
print "ERRO - Variavel mail sem ponto";
elseif (strstr($mail,' '))
print "ERRO - Variavel mail tem algum espaço";
else
print $mail;

?>


