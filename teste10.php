<?php

//******************************************************************* */

interface Banco
{  // interface define um modelo para ser usado em outras classes
    const banco = "Banco do Povo";
    public function depositar($valor);
    public function sacar($valor);
    public function saldo($nome);
}

//******************************************************************* */

final class Cliente
{
    public $nome;
    public $cpf;
    public $email;

    public function __construct($nome, $cpf, $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("<p>E-mail inválido</p>");
        } elseif (!$nome || !$cpf) {
            throw new Exception("<p>Dados incorretos</p>");
        } else {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
        }
    }
}

//******************************************************************* */

abstract class ContaBanco implements Banco
{     // abstract NÃO PODE ser instanciada    	
    protected $agencia;
    protected $conta;
    protected $saldo; 
    protected $cliente;   

    public static function getBanco()
    { // static não precisa ser instanciada
        return self::banco; // não pode usar this
    }

    public function getDados(){
        return $this->cliente; // retorna Objeto Cliente
    }

    protected function __construct($agencia, $conta, $saldo, Cliente $cliente)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
        $this->cliente = $cliente;            
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
    public function __construct($agencia, $conta, $saldo, $cliente, $limite)
    {
        parent::__construct($agencia, $conta, $saldo, $cliente); //herda algumas características e
        $this->limite = $limite; // implementa uma nova ( POLIMORFISMO )
        echo "<p>OK, <b>Conta Corrente</b> {$this->conta}, <b>AG</b> {$this->agencia}, Criada no <b>" .
            parent::banco . "</b> para: <u>{$this->cliente->email}</u> , <b>saldo Atual</b>: {$this->saldo}</p>";
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
        echo "<p>O saldo atual na " . self::tipo . " ({$nome}) é {$this->saldo}</p>";
    }
}

//******************************************************************* */

final class Poupanca extends ContaBanco
{
    const tipo = "Conta Poupança";
    public function __construct($agencia, $conta, $saldo, $cliente)
    {
        parent::__construct($agencia, $conta, $saldo, $cliente);
        echo "<p>OK, <b>Conta Poupança</b> {$this->conta}, <b>AG</b> {$this->agencia}, Criada no <b>" .
            parent::banco . "</b> para: <u>{$this->cliente->email}</u> , <b>saldo Atual</b>: {$this->saldo}</p>";
    }
    public function saldo($nome)
    {
        echo "<p>O saldo atual na " . self::tipo . " ({$nome}) é {$this->saldo}</p>";
    }
}

//******************************************************************* */

echo "<h2>Bem vindo ao ".ContaBanco::getBanco()."</h2>";
$ok = false;

try {
    $cl = new Cliente("Fulano","123456789-00","email@asdf.com");
    $ok = true;
} catch (Exception $e) {
    echo $e->getMessage();
}

if ($ok) {

    $c1 = new Corrente('a233', '24xxx', 10000,$cl, 1000);
    $p1 = new Poupanca('a233', '24xxx', 10000, $cl);

    echo "<b>Dados:</b><br>
    Nome: ".$c1->getDados()->nome."<br>
    CPF: ".$c1->getDados()->cpf."<br>
    E-Mail: ".$c1->getDados()->email."<br>";


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
