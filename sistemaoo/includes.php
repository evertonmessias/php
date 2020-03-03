<?php
include '../config.php';
servidor('i');

class Sistema
{
    public $tabela = 'pessoas';

    public function sessao()
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
        return new mysqli(servidor, usuario, senha, banco);
    }

    public function consultar($tabela, $conexao)
    {
        $sql = "SELECT * from $tabela";

        $lista = mysqli_query($conexao, $sql);
        print "<table class='tabela'><tr><td class='tdid'><h4>ID</h4></td><td><h4>Nome</h4></td><td><h4>Telefone</h4></td><td><h4>E-Mail</h4></td></tr>";
        while ($vetor = mysqli_fetch_array($lista)) {
            print "<tr><td class='tdid'>" . $vetor[0] . "</td><td>" . $vetor[1] . "</td><td>" . $vetor[2] . "</td><td>" . $vetor[3] . "</td></tr>";
        }
        print "</table>";
    }

    public function lista($tabela, $tipo, $conexao)
    {
        $total = 0;
        $id = 1;
        $sql = "SELECT * from $tabela";
        $lista = $conexao->query($sql);
        print "<table class='tabela'><tr><td colspan='2' class='tdida'><h4>ID</h4></td><td><h4>Nome</h4></td><td><h4>Telefone</h4></td><td><h4>E-Mail</h4></td></tr>";
        foreach ($lista as $vetor) {
            if ($tipo == "alterar") {
                print "<tr><td class='tdida'><input type='radio' name='id' id='id" . $id . "' value='" . $vetor['id'] . "'/></td><td class='tdida'>" . $vetor['id'] . "</td><td>" . $vetor['nome'] . "</td><td>" . $vetor['telefone'] . "</td><td>" . $vetor['email'] . "</td></tr>";
            } elseif ($tipo == "apagar") {
                print "<tr><td class='tdida'><input type='checkbox' id='id" . $id . "' value='" . $vetor['id'] . "'/></td><td class='tdida'>" . $vetor['id'] . "</td><td>" . $vetor['nome'] . "</td><td>" . $vetor['telefone'] . "</td><td>" . $vetor['email'] . "</td></tr>";
            }
            $id++;
            $total++;
        }
        print "</table>";
        print "<input type='hidden' id='total' value='" . $total . "'>";
    }
}
