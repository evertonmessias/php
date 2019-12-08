<html><pre><?php
require_once './teste14-2.php';require_once './teste14-3.php';
//$h = new Pessoa(); // abstract não instancia
$a = new Aluno();
$p = new Professor();
$a->setNome("Maria"); // Nome herdado	
$p->setNome("Cláudio");
$a->setIdade(25);
$p->idade = 55; // Sobrepor (não acessou idade:Pessoas:private)
$p->aula();$a->aula();echo "<br><br>";
print_r($a);print_r($p);?>
</pre></html>
