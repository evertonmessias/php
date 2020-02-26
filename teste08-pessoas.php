<?php
if (sessao_mysql()) {
    servidor($server);
    // conexão com PDO
    $dsn = "mysql:dbname=" . banco . ";host=" . servidor . "";
    try {
        $conexaoPDO = new PDO($dsn, usuario, senha);
    } catch (Exception $e) {
        echo "<p>ERRO ao se conectar</p>";
        echo "<p>".$e->getMessage()."</p>";
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
        <p><input type="submit" name="add_nome" value="CADASTRAR" /></p>
        <?php
        if (isset($_POST['add_nome'])) {
            $nnome = $_POST['nnome'];
            $ntelefone = $_POST['ntelefone'];
            $sql0 = "SELECT * FROM pessoas WHERE nome = '$nnome'";
            $result = $conexaoPDO->query($sql0);
            $busca = false;
            foreach ($result as $linha){
                if($linha[1]==$nnome)$busca = true;
            }
            if ($busca) {
                print "<h5>Erro => $nnome => JÁ EXISTE ! </h5>";
            } else {
                $sql1 = "INSERT INTO pessoas (id, nome, telefone,email) VALUES (default, '$nnome', '$ntelefone','asdf@asdf')";
                $conexaoPDO->query($sql1);
                print "<h5>Adicionado: $nnome , Telefone: $ntelefone </h5>";
            }
        }
        ?>
    </form>
</fieldset>

<!-- *************************** DEL nome *********************************** -->
<fieldset id="form2">
    <form method="POST">

        <legend>Apagar</legend><br><br>
        <p><input type="text" class="campo" name="nome" placeholder=" Pessoa" required /></p>
        <br>
        <p><input type="submit" name="del_nome" value="APAGAR" /></p>
        <?php
        if (isset($_POST['del_nome'])) {
            $nome = $_POST['nome'];
            $sql2 = "SELECT * FROM pessoas WHERE nome = '$nome'";
            $result = $conexaoPDO->query($sql2);
            $busca = false;
            foreach ($result as $linha){
                if($linha[1]==$nome)$busca = true;
            }
            if ($busca) {
                $sql22 = "DELETE FROM pessoas WHERE nome = '$nome'";
                $conexaoPDO->query($sql22);
                print "<h5>Pessoa Apagada => $nome </h5>";
            } else {
                print "<h5>Nome Não Encontrado !! </h5>";
            }
        }
        ?>
    </form>
</fieldset>


<!-- *************************** CONSULTA *********************************** -->
<fieldset id="form3">
    <form method="POST">

        <legend>Consultar</legend><br><br>
        <p><input type="submit" name="consultar" value="CONSULTAR" /></p>
        <?php
        if (isset($_POST['consultar'])) {
            $sql3 = "SELECT * from pessoas";
            $query = $conexaoPDO->query($sql3); // captura os dados
            echo "<table class='pessoas'><tr><th>ID</th><th>Nome</th><th>Telefone</th><th>E-Mail</th></tr>";
            foreach ($query as $vetor) { // matriz_de_busca ; traz um por um das linhas de registros
                print "<tr><td>$vetor[0]</td><td>$vetor[1]</td><td>$vetor[2]</td><td>$vetor[3]</td></tr>";
            }echo "</table>";
        }
        ?>

    </form>
</fieldset>
<br><br><br>