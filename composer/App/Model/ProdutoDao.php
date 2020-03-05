<?php
namespace App\Model;
class ProdutoDao{
    public function create(Produto $p){
        $sql = "INSERT INTO produtos VALUES (default,?,?)";
        $cadastrar = Conexao::getConn()->prepare($sql);
        $cadastrar->execute(array($p->getNome(),$p->getDescricao()));
        if ($cadastrar){
            echo "cadastro OK";
        }else{
            echo "BAD";
        }
    }
    public function read(){
        $sql = "SELECT * FROM produtos";
        $result = Conexao::getConn()->query($sql);
        return $result;
    }

    public function update(Produto $p){
        $sql = "UPDATE produtos SET nome = ?, descricao = ? WHERE id= ?";
        $update = Conexao::getConn()->prepare($sql);
        $update->execute(array($p->getNome(),$p->getDescricao(),$p->getId()));
        if ($update){
            echo "update OK";
        }else{
            echo "BAD";
        }
    }

    public function delete($id){
        $sql = "DELETE FROM produtos WHERE id=?";
        $result = Conexao::getConn()->prepare($sql);
        $result->execute(array($id));
        return $result;
    }
}