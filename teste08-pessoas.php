<?php
if (!isset($_SESSION['user'])) {
    header('location:./teste08.php');
} else {
    servidor($server);
    // conexão com PDO
    $dsn = "mysql:dbname=" . banco . ";host=" . servidor . "";
    try {
        $conexaoPDO = new PDO($dsn, usuario, senha);
    } catch (Exception $e) {
        echo "<p>ERRO ao se conectar</p>";
        echo "<p>" . $e->getMessage() . "</p>";
        // getCode() , getLine() , getFile() .
        // getTrace() => array com todos os erros
    }
}
?>
<!-- *************************** ADD PESSOAS *********************************** -->
<h2>PESSOAS</h2>
<fieldset id="form1">
    <form method="POST">
        <legend>Cadastrar</legend><br><br>
        <p><input type="text" class="campo" name="nnome" placeholder=" Nome" required /></p>
        <p><input type="fone" class="campo" name="ntelefone" placeholder=" Telefone" required /></p>
        <p><input type="mail" class="campo" name="nemail" placeholder=" E-Mail" required /></p>
        <p><input type="submit" name="add_nome" value="CADASTRAR" /></p>
        <?php
        if (isset($_POST['add_nome'])) {
            $nnome = $_POST['nnome'];
            $ntelefone = $_POST['ntelefone'];
            $nemail = $_POST['nemail'];
            $sql0 = "SELECT * FROM pessoas WHERE nome = '$nnome'";
            $result = $conexaoPDO->query($sql0);
            $busca = false;
            foreach ($result as $linha) {
                if ($linha['nome'] == $nnome) $busca = true;
            }
            if ($busca) {
                print "<h5>Erro => $nnome => JÁ EXISTE ! </h5>";
            } else {
                $sql1 = "INSERT INTO pessoas (id, nome, telefone,email) VALUES (default, '$nnome', '$ntelefone','$nemail')";
                $conexaoPDO->query($sql1);
                print "<h5>Adicionado: $nnome<br>Telefone: $ntelefone<br>E-Mail: $nemail</h5>";
            }
        }
        ?>
    </form>
</fieldset>

<!-- *************************** DEL nome *********************************** -->
<fieldset id="form2">
    <form method="POST">

        <legend>Apagar</legend><br><br>
        <p><input type="number" class="campo" name="idnome" placeholder=" ID Pessoa" required /></p>
        <br>
        <p><input type="submit" name="del_nome" value="APAGAR" /></p>
        <?php
            if (isset($_POST['del_nome'])) {
                $idnome = $_POST['idnome'];
                $sql2 = "SELECT id FROM pessoas WHERE id = '$idnome'";
                $result = $conexaoPDO->query($sql2);
                $busca = false;
                foreach ($result as $linha){
                    if($linha['id']==$idnome)$busca = true;
                }
                if ($busca) {
                    $sql22 = "DELETE FROM pessoas WHERE id = '$idnome'";
                    $conexaoPDO->query($sql22);
                    print "<h5>Pessoa Apagada => $idnome </h5>";
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

        <legend>Consultar</legend><br><br>
        <p><input type="text" class="campo" name="cnome" placeholder=" Começado por (?)" /></p>
        <p><input type="submit" name="consultar" value="CONSULTAR" /></p>
        <?php
        if (isset($_POST['consultar'])) {
            $cnome = $_POST['cnome'];
            if ($cnome == "") {
                $sql3 = "SELECT * from pessoas";
            } else {
                $sql3 = "SELECT * from pessoas WHERE nome LIKE '$cnome%'";
            }
            $query = $conexaoPDO->query($sql3); // captura os dados
            echo "<table class='pessoas'><tr><th>ID</th><th>Nome</th><th>Telefone</th><th>E-Mail</th></tr>";
            foreach ($query as $vetor) { // matriz_de_busca ; traz um por um das linhas de registros
                print "<tr><td>$vetor[id]</td><td>$vetor[nome]</td><td>$vetor[telefone]</td><td>$vetor[email]</td></tr>";
            }
            echo "</table>";
        }
        ?>

    </form>
</fieldset>
<br><br><br>