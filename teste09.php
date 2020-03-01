<?php
class Fabricante{
    private $nome;
    public function __construct($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }    
}
class Produto{
    private $descricao;
    private $preco;
    private $fabricacao;
    public function __construct($descricao,$preco, Fabricante $fabricacao){
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->fabricacao = $fabricacao;
    }
    public function getDetalhes(){
        return "O produto {$this->descricao} 
            custa {$this->preco} reais e 
            pertence à {$this->fabricacao->getNome()}<br>";
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
}
$f1 = new Fabricante('Editora A');
$p1 = new Produto('Livro',50,$f1);
//var_dump($p1);
echo $p1->getDetalhes();
$p1->setDescricao("OUTRO");
echo $p1->getDetalhes();

?>

