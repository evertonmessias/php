<?php

interface Banco
{  // interface define um modelo para ser usado em outras classes
    const banco = "Banco do Povo";
    public function depositar($valor);
    public function sacar($valor);
    public function saldo($nome);
}

//******************************************************************* */

abstract class ContaBanco implements Banco
{     // abstract NÃO PODE ser instanciada    	
    protected $agencia;
    protected $conta;
    protected $saldo;
    protected $email;

    public static function getBanco()
    { // static não precisa ser instanciada
        return self::banco;
    }

    protected function __construct($agencia, $conta, $saldo, $email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("<p>E-mail inválido</p>");
        }elseif($saldo == 0){
            throw new Exception("<p>Saldo Nulo</p>");
        }elseif(!$agencia || !$conta){
            throw new Exception("<p>Dados incorretos</p>");
        }else{
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->saldo = $saldo;
            $this->email = $email;
        }        
    }
    public function depositar($valor)
    {
        $this->saldo += $valor;
        echo "<p>Deposito de R$ {$valor}, saldo R$ {$this->saldo}</p>";
    }
    public function sacar($valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "<p>Saque de R$ {$valor}, saldo: R$ {$this->saldo}</p>";
        } else {
            echo "<p>Saldo insuficiente, saldo: R$ {$this->saldo}</p>";
        }
    }
    public function __clone()
    {
        echo '<p>Clonagem feita, ok</p>';
    }
}

//******************************************************************* */

final class Corrente extends ContaBanco
{ // final não pode ser extendida 
    const tipo = "Conta Corrente";
    private $limite;
    public function __construct($agencia, $conta, $saldo, $email, $limite)
    {
        parent::__construct($agencia, $conta, $saldo, $email); //herda algumas características e
        $this->limite = $limite; // implementa uma nova ( POLIMORFISMO )
        echo "<p>OK, <b>Conta Corrente</b> {$this->conta}, <b>AG</b> {$this->agencia}, Criada no <b>" . 
        parent::banco . "</b> para: <u>{$this->email}</u> , <b>saldo Atual</b>: {$this->saldo}</p>";
    }
    public function sacar($valor)
    { //( POLIMORFISMO )
        if (($this->saldo + $this->limite) >= $valor) {
            $this->saldo -= $valor;
            echo "<p>Saque de R$ {$valor}, saldo: R$ {$this->saldo}</p>";
        } else {
            echo "<p>Saldo insuficiente, saldo: R$ {$this->saldo}</p>";
        }
    }
    public function saldo($nome)
    {
        echo "<p>O saldo atual na " . self::tipo . " ({$nome }) é {$this->saldo}</p>";
    }
}

//******************************************************************* */

final class Poupanca extends ContaBanco
{
    const tipo = "Conta Poupança";
    public function __construct($agencia, $conta, $saldo, $email)
    {
        parent::__construct($agencia, $conta, $saldo, $email);
        echo "<p>OK, <b>Conta Poupança</b> {$this->conta}, <b>AG</b> {$this->agencia}, Criada no <b>" . 
        parent::banco . "</b> para: <u>{$this->email}</u> , <b>saldo Atual</b>: {$this->saldo}</p>";
    }
    public function saldo($nome)
    {
        echo "<p>O saldo atual na " . self::tipo . " ({$nome }) é {$this->saldo}</p>";
    }
}

//******************************************************************* */

echo "<h2><u>Bem vindo ao " . ContaBanco::getBanco() . "</u></h2>";
$ok1 = $ok2 = false;

try{
    $c1 = new Corrente('a233', '24xxx', 10000, "email_1_@asdf.com", 500);
    $ok1 = true;
}catch(Exception $e){
    echo $e->getMessage();
}
try{
    $p1 = new Poupanca('a233', '24xxx', 10000, "email_2_@asdf.com");
    $ok2 = true;
}catch(Exception $e){
    echo $e->getMessage();
}

if($ok1 && $ok2){
echo "<h3>Movimentos na CC (c1):</h3>";
$c1->depositar(5000);
$c1->sacar(9000);
$c1->sacar(9000);

echo "<h3>Movimentos na CP (p1):</h3>";
$p1->depositar(8000);
$p1->sacar(9000);
$p1->sacar(9000);

echo "<h3>Clones:</h3>";
$p2 = clone $p1;
$c2 = clone $c1;

$p2->depositar(5000);
$c2->depositar(5000);

$p1->saldo('p1');
$p2->saldo('p2');
$c1->saldo('c1');
$c2->saldo('c2');
}
