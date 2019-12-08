<?php       // classe mãe
abstract class Pessoas{
    protected $nome;
    private $idade;
    abstract function aula();
    // polimorfismo de sobreposição         
    function getNome() {return $this->nome;}
    function setNome($nome) {$this->nome = $nome;}
    function getIdade() {return $this->idade;}
    function setIdade($idade) {$this->idade = $idade;}}