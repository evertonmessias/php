<?php
namespace App\Model;
class ProdutoDao{
    public function create(Produto $p){
        $sql = "INSERT INTO produtos (id,nome,descricao) VALUES (default,?,?)";
        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->execute(array($p->getNome(),$p->getDescricao()));
    }
    public function read(){

    }
    public function update(Produto $p){

    }
    public function delete($id){

    }
}