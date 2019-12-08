<?php

class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;
    
    // Metodos    
    public function apresentar(){
        echo "<p>-----------APRESENTAÇÃO-----------</p>";
        echo "<p>Lutador : " . $this->getNome() . ", Nacionalidade: " . $this->getNacionalidade(). "</p>";
        echo "<p>Categoria: Peso ".$this->getCategoria()."</p>";
        echo "<p>Idade: " . $this->getIdade() . " anos ; Peso: " . $this->getPeso() . " Kg</p>";
        echo "<p>Vitorias: ".$this->getVitorias().", Derrotas: ".$this->getDerrotas().", Empates: ".$this->getEmpates()."<p/>";        
        echo "<p>---------------//------------------</p>";
        }
    
    public function status(){
        echo "<p>------------STATUS-----------------</p>";
        echo "<p>Nome: " . $this->getNome() . ", categoria: " . $this->getCategoria() . "</p>"; 
        echo "<p>Vitorias: ".$this->getVitorias().", Derrotas: ".$this->getDerrotas().", Empates: ".$this->getEmpates()."<p/>";
        echo "<p>---------------//------------------</p>";
        }
    
    public function ganhaLuta(){
        $this->setVitorias($this->getVitorias() + 1);
        }

    public function perdeLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
        }

    public function empataLuta(){
        $this->setEmpates($this->getEmpates() + 1);
        }

    // Construtor
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

// ********************** Metodos getters e setters  ***************************   
    
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }
 
    public function setCategoria() {
        if ($this->peso < 52.2){$this->categoria = "Invalido";}
        elseif ($this->peso <= 70.3){$this->categoria = "Leve";}
        elseif ($this->peso <= 83.9){$this->categoria = "Medio";}
        elseif ($this->peso <= 120.2){$this->categoria = "Pesado";}
        else {$this->categoria = "Invalido";}
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }
 
}