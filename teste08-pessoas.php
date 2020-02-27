<?php
if (!isset($_SESSION['user'])) {
    header('location:./teste08.php');
} else {
    servidor($server);
    // conexão com PDO
    $dsn = "mysql:dbname=" . banco . ";host=" . servidor . "";
    try {
        $conexaoPDO = new PDO($dsn, usuario, senha);
        //$conexaoPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
    } catch (Exception $e) {
        echo "<p>ERRO ao se conectar</p>";
        echo "<p>" . $e->getMessage() . "</p>";
        // getCode() , getLine() , getFile() .
        // getTrace() => array com todos os erros
    }
    $tabela = "pessoas";
    function consultar($conexao, $tabela, $campo, $valor)
    {
        $busca = false;
        $sql = "SELECT * FROM $tabela WHERE $campo = ?";
        $result = $conexao->prepare($sql);
        $result->execute(array($valor));
        foreach ($result as $linha) {
            if ($linha[$campo] == $valor) $busca = true;
        }
        return $busca;
    }
    /* OBS.:
    $result = $conexaoPDO->query($sql0); // inseguro !!!      
    $result->bindParam(":nnome", $nnome, PDO::PARAM_STR); // subtituido pelo array
    */
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
            if (consultar($conexaoPDO,$tabela,'nome',$nnome)) {
                print "<h5>Erro => $nnome => JÁ EXISTE ! </h5>";
            } else {
                $sql1 = "INSERT INTO pessoas VALUES (default, ?, ?, ?)";
                $result = $conexaoPDO->prepare($sql1);
                $result->execute(array($nnome, $ntelefone, $nemail));
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

        <legend>Apagar</legend><br><br>
        <p><input type="number" class="campo" name="idnome" placeholder=" ID Pessoa" required /></p>
        <br>
        <p><input type="submit" name="del_nome" value="APAGAR" /></p>
        <?php
        if (isset($_POST['del_nome'])) {
            $idnome = $_POST['idnome'];            
            if (consultar($conexaoPDO,$tabela,'id',$idnome)) {
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

        <legend>Consultar</legend><br><br>
        <p><input type="text" class="campo" name="cnome" placeholder=" Começado por (?)" /></p>
        <p><input type="submit" name="consultar" value="CONSULTAR" /></p>
        <?php
        if (isset($_POST['consultar'])) {
            $cnome = $_POST['cnome'];
            if ($cnome == "") {
                $sql3 = "SELECT * from pessoas"; // distinct - descarta iguais
            } else {
                $sql3 = "SELECT * from pessoas WHERE nome LIKE '$cnome%'";
            }
            $result = $conexaoPDO->prepare($sql3);
            $result->execute();
            echo "<table class='pessoas'><tr><th>ID</th><th>Nome</th><th>Telefone</th><th>E-Mail</th></tr>";
            foreach ($result as $vetor) { // matriz_de_busca ; traz um por um das linhas de registros
                print "<tr><td>$vetor[id]</td><td>$vetor[nome]</td><td>$vetor[telefone]</td><td>$vetor[email]</td></tr>";
            }
            echo "</table>";
        }
        ?>

    </form>
</fieldset>
<br><br><br>