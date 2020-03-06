<?php

class Banco
{
    public function lista($tabela, $tipo, $conexao)
    {
        $sql = "SELECT * from $tabela";
        $lista = $conexao->query($sql);
        print "<table class='tabela'><tr><td class='tdida'><h4>ID</h4></td><td><h4>Nome</h4></td><td><h4>Telefone</h4></td><td><h4>E-Mail</h4></td></tr>";
        foreach ($lista as $vetor) {
            if ($tipo == "consultar") {
                print "<tr><td class='tdida'>" . $vetor['id'] . "</td><td>" . $vetor['nome'] . "</td><td>" . $vetor['telefone'] . "</td><td>" . $vetor['email'] . "</td></tr>";
            } elseif ($tipo == "alterar") {
                print "<tr class='linha' id='linha" . $vetor['id'] . "' onclick='alterar(" . $vetor['id'] . ")'>
                <td class='tdida'>" . $vetor['id'] . "</td>
                <td class='tnome" . $vetor['id'] . "'>" . $vetor['nome'] . "</td>
                <td class='ttelefone" . $vetor['id'] . "'>" . $vetor['telefone'] . "</td>
                <td class='temail" . $vetor['id'] . "'>" . $vetor['email'] . "</td>
                </tr>";
            } elseif ($tipo == "apagar") {
                print "<tr class='linha' id='linha" . $vetor['id'] . "' onclick='apagar(" . $vetor['id'] . ")'>              
                <td class='tdida'>" . $vetor['id'] . "</td>
                <td>" . $vetor['nome'] . "</td>
                <td>" . $vetor['telefone'] . "</td>
                <td>" . $vetor['email'] . "</td>
                </tr>";
            }
        }
        print "</table>";
    }
}