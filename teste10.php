<?php

abstract class ContaBanco {	 // abstract não pode ser instanciada	
	protected $agencia;
    protected $conta;
	protected $saldo;			
	public function __construct($agencia,$conta,$saldo){
		$this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }	
	public function depositar($valor){
        $this->saldo += $valor;
        echo "<p>Deposito de R$ {$valor}, saldo R$ {$this->saldo}</p>";
    }		
	public function sacar($valor){
		if($this->saldo >= $valor) {
			$this->saldo -= $valor;
            echo "<p>Saque de R$ {$valor}, saldo: R$ {$this->saldo}</p>";
        }
			else {echo "<p>Saldo insuficiente, saldo: R$ {$this->saldo}</p>";}	      
    }    	
}

final class Corrente extends ContaBanco{ // final não pode ser extendida 
    protected $limite;
    public function __construct($agencia,$conta,$saldo,$limite){
		parent::__construct($agencia,$conta,$saldo); //herda algumas características e
        $this->limite = $limite; // implementa uma nova
        echo "<p>Conta Corrente Criada OK</p>";
    }
    public function sacar($valor){
		if(($this->saldo + $this->limite) >= $valor) {
			$this->saldo -= $valor;
            echo "<p>Saque de R$ {$valor}, saldo: R$ {$this->saldo}</p>";
        }
			else {echo "<p>Saldo insuficiente, saldo: R$ {$this->saldo}</p>";}	      
    }
}

final class Poupanca extends ContaBanco{
    public function __construct($agencia,$conta,$saldo){
		parent::__construct($agencia,$conta,$saldo);        
        echo "<p>Conta Poupança Criada OK</p>";
    }
}

$c1 = new Corrente('a233','24xxx',5000,500);
$p1 = new Poupanca('a233','24xxx',1000);

echo "<h3>Movimentos na CC:</h3>";
$c1->depositar(5000);
$c1->sacar(9000);
$c1->sacar(9000);

echo "<h3>Movimentos na CP:</h3>";
$p1->depositar(8000);
$p1->sacar(9000);
$p1->sacar(9000);

