<?php

namespace inicio;

namespace fim;

include 'htmlcss.php';
include 'config.php';
echo \inicio\site();
?>
<fieldset class="form">
    <form method="POST" id="form" action="teste08-1.php">
        <legend>Login</legend><br><br>
        <p class="campo"><input type="text" id="user" name="user" placeholder=" Usuario" required /></p><br>
        <p class="campo"><input type="password" id="pass" name="pass" placeholder=" Senha" required /></p>
        <p class="servidor">
            <input type="radio" name="server" value="i">Servidor Interno<br>
            <input type="radio" name="server" value="e">Servidor Externo
        </p>
        <br>
        <p><input type="button" id="botao" value="OK" /></p>
    </form>
    <script>
        $(() => {
            $('#botao').click(() => {
                if (!$('#user').val() || !$('#pass').val() ||
                    !$("input[type='radio']:checked").val()) {
                    alert("Digite os campos corretamente!");
                } else {
                    document.getElementById('form').submit();
                }
            })
        })
    </script>
</fieldset>
<?php
echo \fim\site();
?>