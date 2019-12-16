<?php
function imc($p,$a){
	return number_format(($p/pow($a, 2)),2);
}
$resposta = imc(@$_POST['peso'],@$_POST['altura']);
echo "<p>IMC = $resposta</p>";
if($resposta < 20) {echo "<p>ABAIXO DO PESO</p>";}
elseif($resposta >= 20 && $resposta < 25) {echo "<p>PESO NORMAL</p>";}
else {echo "<p>OBESIDADE</p>";}


?>