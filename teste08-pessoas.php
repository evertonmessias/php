<?php
if (!isset($_SESSION['user'])) {
    header('location:./teste08.php');
}
include './teste08-config.php';
?>
<!-- *************************** ADD PESSOAS *********************************** -->
<h2>PESSOAS</h2>
<fieldset id="form1">
    <form method="POST">
        <legend>Cadastrar Pessoas</legend><br><br>
        <p><input type="text" name="nnome" placeholder=" Nome Completo" required /></p>
        <p> <input type="fone" name="ntelefone" placeholder=" Telefone" required /></p>
        <p><input type="mail" name="nemail" placeholder=" E-Mail" required /></p>
        <p>
            <?php
            echo "<select name='user' required>";
            echo "<option class='placeholder' value='' disabled selected>Nome de Usuário</option>";
            $sqluser = "SELECT * FROM login";
            $result = $conexaoPDO->query($sqluser);
            foreach ($result as $linha) {
                echo "<option value='$linha[id]'>$linha[user]</option>";
            }
            echo "</select>";
            ?></p>
        <p><input type="submit" name="add_nome" value="CADASTRAR" /></p>
        <?php
        if (isset($_POST['add_nome'])) {
            $nnome = $_POST['nnome'];
            $ntelefone = $_POST['ntelefone'];
            $nemail = $_POST['nemail'];
            $user = $_POST['user'];
            if (consulta($conexaoPDO, $tabela2, 'nome', $nnome)) {
                print "<h5>Erro => $nnome => JÁ EXISTE ! </h5>";
            } else {
                $sql1 = "INSERT INTO pessoas VALUES (default, ?, ?, ?, ?)";
                $result = $conexaoPDO->prepare($sql1);
                $result->execute(array($nnome, $ntelefone, $nemail, $user));
                if ($result) {
                    print "<h5>Adicionado: $nnome<br>Telefone: $ntelefone<br>E-Mail: $nemail</h5>";
                }
            }
        }
        ?>
    </form>
</fieldset>

<!-- *************************** DEL nome *********************************** -->
<fieldset id="form2">
    <form method="POST">

        <legend>Apagar Pessoas</legend><br><br>
        <p><input type="number" class="campo" name="idnome" placeholder=" ID Pessoa" required /></p>
        <br>
        <p><input type="submit" name="del_nome" value="APAGAR" /></p>
        <?php
        if (isset($_POST['del_nome'])) {
            $idnome = $_POST['idnome'];
            if (consulta($conexaoPDO, $tabela2, 'id', $idnome)) {
                $sql22 = "DELETE FROM pessoas WHERE id = ?";
                $result = $conexaoPDO->prepare($sql22);
                $result->execute(array($idnome));
                if ($result) {
                    print "<h5>Pessoa Apagada => $idnome </h5>";
                }
            } else {
                print "<h5>Pessoa Não Encontrada !! </h5>";
            }
        }
        ?>
    </form>
</fieldset>


<!-- *************************** CONSULTA *********************************** -->
<fieldset id="form3">
    <form method="POST">

        <legend>consulta Pessoas</legend><br><br>
        <p><input type="text" class="campo" name="cnome" placeholder=" Começado por (?)" /></p>
        <p><input type="submit" name="consulta" value="consulta" /></p>
        <?php
        if (isset($_POST['consulta'])) {
            $cnome = $_POST['cnome'];
            if ($cnome == "") {
                $sql3 = "SELECT                
                pessoas.id,
                pessoas.nome,
                pessoas.telefone,
                pessoas.email,
                login.user
                from pessoas
                INNER JOIN login
                ON pessoas.idlogin = login.id
                ORDER BY pessoas.id ASC"; // distinct - descarta iguais
            } else {
                $sql3 = "SELECT 
                pessoas.id,
                pessoas.nome,
                pessoas.telefone,
                pessoas.email,
                login.user
                from pessoas
                INNER JOIN login
                ON pessoas.idlogin = login.id
                WHERE pessoas.nome LIKE '$cnome%'
                ORDER BY pessoas.id ASC";
            }
            $result = $conexaoPDO->query($sql3);
            echo "<table class='pessoas'>
            <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-Mail</th>
            <th>User</th>
            </tr>";
            foreach ($result as $vetor) { // matriz_de_busca ; traz um por um das linhas de registros
                print
                    "<tr><td>" . $vetor[0] .
                    "</td><td>" . $vetor[1] .
                    "</td><td>" . $vetor[2] .
                    "</td><td>" . $vetor[3] .
                    "</td><td>" . $vetor[4] .
                    "</td></tr>";
            }
            echo "</table>";
        }
        ?>

    </form>
</fieldset>
<br><br><br>