<?php
if (!isset($_SESSION['user'])) {
    header('location:./teste08.php');
}
include './teste08-config.php';
?>
<!-- *************************** ADD USER *********************************** -->
<h2>USUARIOS</h2>
<fieldset id="form1">
    <form method="POST">
        <legend>Cadastrar</legend><br><br>
        <p><input type="text" class="campo" name="nuser" placeholder=" Usuario" required /></p>
        <p><input type="password" class="campo" name="npass" placeholder=" Senha" required /></p>
        <p><input type="submit" name="add_user" value="CADASTRAR" /></p>
        <?php
        if (isset($_POST['add_user'])) {
            $nuser = $_POST['nuser'];
            $npass = $_POST['npass'];
            $npassMD5 = md5($npass);
            if (consulta(conexaoPDO(), $tabela1, 'user', $nuser)) {
                print "<h5>Erro => $nuser => JÁ EXISTE ! </h5>";
            } else {
                $sql1 = "INSERT INTO login (id, user, pass) VALUES (default, '$nuser', '$npassMD5')";
                conexaoPDO()->query($sql1);
                print "<h5>Adicionado: $nuser , senha: $npass </h5>";
            }
        }
        ?>
    </form>
</fieldset>

<!-- *************************** DEL USER *********************************** -->
<fieldset id="form2">
    <form method="POST">
        <legend>Apagar</legend><br><br>
        <p><input type="number" class="campo" name="iduser" placeholder=" ID Usuario" required /></p>
        <br>
        <p><input type="submit" name="del_user" value="APAGAR" /></p>
        <?php
        if (isset($_POST['del_user'])) {
            $iduser = $_POST['iduser'];
            if (consulta(conexaoPDO(), $tabela1, 'id', $iduser)) {
                $sql22 = "DELETE FROM login WHERE id = '$iduser'";
                conexaoPDO()->query($sql22);
                print "<h5>Usuario Apagado => $iduser </h5>";
            } else {
                print "<h5>Usuario Não Encontrado !! </h5>";
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
            $sql3 = "SELECT * from login";
            $query = conexaoPDO()->query($sql3); // captura os dados
            echo "<table class='users'><tr><th>ID</th><th>Nome</th></tr>";
            foreach ($query as $vetor) { // matriz_de_busca ; traz um por um das linhas de registros
                print "<tr><td>$vetor[id]</td><td>$vetor[user]</td></tr>";
            }
            echo "</table>";
        }
        ?>

    </form>
</fieldset>
<br><br><br>