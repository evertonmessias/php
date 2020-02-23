<?php

namespace inicio;

namespace fim;

include 'teste07_site.php';
include 'config.inc';
echo \inicio\site();

?>
    <fieldset class='f0'>
        <legend>
            <h3>Login</h3>
        </legend><br>
        <span class="login">(Para enviar arquivos precisa se logar)</span><br>
        <form method="POST">            
            <input type="text" name="user" placeholder="Usuario"><br>
            <input type="password" name="pass" placeholder="Senha"><br>
            <input type="submit" class="botao" name="botao" value="Enviar" />
        </form>
            <?php            
            if(isset($_POST['botao'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                if ($user == USERNAME && $pass == PASSWORD){
                    session_start();
                    $_SESSION['nome'] = $user;
                    header('Location:./teste07_func.php');
                }else{
                    echo "<span class='login'>Usuario ou Senha inválidos!</span>";
                }
            }

            ?>
    </fieldset>
</div>
<?php
echo \fim\site();
?>