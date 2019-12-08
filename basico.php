<html><pre><code>

//PHP (PHP Hypertext Preprocessor) :Linguagem de programação interpretada 


// Sintaxes Básicas **********************************************
//****************************************************************


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

echo "<hr><hr><hr>";

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

echo "MATRIZ 0,1 = ".$matriz[0][1];


echo "<br><br>";echo "<br><br>";

//Função date()
//para inserir no site use : include("site.php");
$sem = date ("w");
$SEM = array("domingo","segunda-feira","terça-feira","quarta-feira","quinta-feira","sexta-feira","sábado");
$dia = date("d");
$mes = date("m");
$MES = array("01"=>"janeiro","02"=>"fevereiro","03"=>"março","04"=>"abril","05"=>"maio","06"=>"junho","07"=>"julho","08"=>"agosto","09"=>"setembro","10"=>"outubro","11"=>"novembro","12"=>"dezembro");
$ano = date("Y");
echo ">>>>>    $SEM[$sem], $dia de $MES[$mes] de $ano   <<<<<<<<<";


echo "<br><br>";echo "<br><br>";


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

</code></pre></html>
