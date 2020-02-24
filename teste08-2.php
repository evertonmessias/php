<?php

namespace inicio;

namespace fim;

include 'htmlcss.php';
include 'config.php';
echo \inicio\site();
if (sessao_mysql()) {
    $user = $_SESSION['user'];
    $server = $_SESSION['server'];
    servidor($server);
    $conexao = mysqli_connect(servidor, usuario, senha, banco); // conecta
}
?>
<h5><?php print "$user<br><form method='GET'><button type='submit' name='exit'>sair</button></form>";
    if (isset($_GET['exit'])) {
        unset($_SESSION['user']);
        unset($_SESSION['server']);
        session_destroy();
        header('location:./teste08.php');
    }
    ?></h5>
<hr>
<!-- *************************** ADD USER *********************************** -->
<div id="sitemysql">
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
                $sql0 = "SELECT * FROM login WHERE user = '$nuser'";
                $result = mysqli_query($conexao, $sql0);
                if (mysqli_num_rows($result) > 0) {
                    print "<h5>Erro => $nuser => JÁ EXISTE ! </h5>";
                } else {
                    $sql1 = "INSERT INTO login (id, user, pass) VALUES (default, '$nuser', '$npassMD5')";
                    mysqli_query($conexao, $sql1);
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
            <p><input type="text" class="campo" name="user" placeholder=" Usuario" required /></p>
            <br>
            <p><input type="submit" name="del_user" value="APAGAR" /></p>
            <?php
            if (isset($_POST['del_user'])) {
                $user = $_POST['user'];
                $sql2 = "SELECT * FROM login WHERE user = '$user'";
                $result = mysqli_query($conexao, $sql2);
                if (mysqli_num_rows($result) > 0) {
                    $sql22 = "DELETE FROM login WHERE user = '$user'";
                    mysqli_query($conexao, $sql22);
                    print "<h5>Usuario Apagado => $user </h5>";
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
                $query = mysqli_query($conexao, $sql3); // captura os dados
                while ($vetor = mysqli_fetch_array($query)) { // matriz_de_busca ; traz um por um das linhas de registros
                    print "<h5 class='cons'> $vetor[0] - $vetor[1] </h5><br>";
                }
            }
            ?>

        </form>
    </fieldset>
</div>
<?php
echo \fim\site();
?>