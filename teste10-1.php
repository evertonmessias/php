<?php
class ContaBanco {	
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;
			
	public function __construct(){
		$this->setSaldo(0);
		$this->setStatus(false);
		echo "<p>Conta Criada OK</p>";}
	
	public function abrirConta($num,$nome,$t){
		$this->setNumConta($num);		
		$this->setDono($nome);
		$this->setTipo($t);
		$this->setStatus(true);
		if($t == "CC") {$this->setSaldo(50);}
		elseif($t == "CP") {$this->setSaldo(150);}	}
	
	public function fecharConta(){
		if($this->getSaldo() > 0){
			echo "<p>Conta ainda tem dinheiro - não pode fechar</p>";}
		if($this->getSaldo() < 0){
			echo "<p>Conta em débito</p>";}
		else {$this->setStatus(false);echo "<p>Conta fechada</p>";}	}
	
	public function depositar($v){
		if($this->getStatus()) {$this->setSaldo($this->getSaldo() + $v);
		echo "<p>Deposito de $v na conta de ". $this->getDono() . "</p>";}
		else {echo "<p>Conta fechada - não consigo depositar</p>";}	}
		
	public function sacar($v){
		if($this->getStatus()) {
			if($this->getSaldo() >= $v) {$this->setSaldo($this->getSaldo() - $v);
			echo "<p>Saque de $v na conta de ". $this->getDono() . "</p>";}
			else {echo "<p>Saldo insuficiente</p>";}	}
		else {echo "<p>Conta fechada - não consigo sacar</p>";}	}

	public function pagarMensal(){
		if($this->getTipo() == "CC") {$v = 12;}elseif($this->getTipo() == "CP") {$v = 20;}
		if($this->getStatus()) {$this->setSaldo($this->getSaldo() - $v);
		echo "<p>Mensalidade de $v efetuada na conta de ". $this->getDono() . "</p>";}
		else {echo "Problemas na conta - não posso cobrar mensal.";}	}
			
	
	public function getNumConta() {return $this->$numConta;}
	public function setNumConta($c) {$this->numConta = $c;}
	
	public function getTipo() {return $this->tipo;}
	public function setTipo ($t) {$this->tipo = $t;}
	
	public function getDono() {return $this->dono;}
	public function setDono ($d) {$this->dono = $d;}
	
	public function getSaldo() {return $this->saldo;}
	public function setSaldo($s) {$this->saldo = $s;}
	
	public function getStatus() {return $this->status;}
	public function setStatus($u) {$this->status = $u;}
}?>