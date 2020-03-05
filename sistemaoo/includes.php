<?php

class Sistema
{
    public $tabela = 'pessoas';

    public function sessaoo()
    {
        session_start();
        if (!isset($_SESSION['snome'])) {
            header('location:index.php');
        }
    }

    public function erro()
    {
        print "<div id='quadro'><div id='mensagem'></div></div>";
    }

    public function conexao()
    {        
        if(isset($_SESSION['server'])){servidor($_SESSION['server']);}        
        return new mysqli(servidor, usuario, senha, banco);
    }

    public function consultar($tabela, $conexao)
    {
        $sql = "SELECT * from $tabela";

        $lista = $conexao->query($sql);
        print "<table class='tabela'><tr><td class='tdid'><h4>ID</h4></td><td><h4>Nome</h4></td><td><h4>Telefone</h4></td><td><h4>E-Mail</h4></td></tr>";
        foreach ($lista as $vetor) {
            print "<tr><td class='tdid'>" . $vetor['id'] . "</td><td>" . $vetor['nome'] . "</td><td>" . $vetor['telefone'] . "</td><td>" . $vetor['email'] . "</td></tr>";
        }
        print "</table>";
    }

    public function lista($tabela, $tipo, $conexao)
    {
        $total = 0;
        $id = 1;
        $sql = "SELECT * from $tabela";
        $lista = $conexao->query($sql);
        print "<table class='tabela'><tr><td class='tdida'><h4>ID</h4></td><td><h4>Nome</h4></td><td><h4>Telefone</h4></td><td><h4>E-Mail</h4></td></tr>";
        foreach ($lista as $vetor) {
            if($tipo == "consultar"){
                print "<tr><td class='tdid'>" . $vetor['id'] . "</td><td>" . $vetor['nome'] . "</td><td>" . $vetor['telefone'] . "</td><td>" . $vetor['email'] . "</td></tr>";  
         } elseif ($tipo == "alterar") {
                print "<tr class='linha' id='linha". $vetor['id']."' onclick='alterar(" . $vetor['id'] . ")'>
                <td class='tdida'>" . $vetor['id'] . "</td>
                <td class='tnome" . $vetor['id'] . "'>" . $vetor['nome'] . "</td>
                <td class='ttelefone" . $vetor['id'] . "'>" . $vetor['telefone'] . "</td>
                <td class='temail" . $vetor['id'] . "'>" . $vetor['email'] . "</td>
                </tr>";
            } elseif ($tipo == "apagar") {
                print "<tr class='linha' id='linha". $vetor['id']."' onclick='apagar(" . $vetor['id'] . ")'>              
                <td class='tdida'>" . $vetor['id'] . "</td>
                <td>" . $vetor['nome'] . "</td>
                <td>" . $vetor['telefone'] . "</td>
                <td>" . $vetor['email'] . "</td>
                </tr>";
            }
            $id++;
            $total++;
        }
        print "</table>";
        print "<input type='hidden' id='total' value='" . $total . "'>";
    }
}
