<?php
namespace inicio;
namespace fim;
include 'htmlcss.php';
include 'config.php';
echo \inicio\site();
?>
<fieldset class="formlogin">
    <form method="POST" id="form" action="teste08-1.php">
        <legend>Login</legend><br><br>
        <p class="campo"><input type="text" id="user" name="user" placeholder=" Usuario" required /></p>
        <p class="campo"><input type="password" id="pass" name="pass" placeholder=" Senha" required /></p>
        <p class="servidor">
            <label><input type="radio" name="server" value="i">&ensp;Servidor Interno</label><br>
            <label><input type="radio" name="server" value="e">&ensp;Servidor Externo</label>
        </p>
        <br>
        <p><input type="button" id="botao" value="OK" /></p><br>
        <span class='login erro'></span>
    </form>
    <script>
        $(() => {
            $('#botao').click(() => {
                if (!$('#user').val() || !$('#pass').val() ||
                    !$("input[type='radio']:checked").val()) {
                        $('.erro').html("Digite os campos corretamente!");
                } else {
                    var user = $('#user').val();
                    var pass = $('#pass').val();
                    var server = $("input[type='radio']:checked").val();
                    $.post('./teste08-login.php', {
                        user: user,
                        pass,
                        pass,
                        server,
                        server
                    }, (mostrar) => {
                        $('.erro').html(mostrar);
                    })
                }
            })
        })
    </script>
</fieldset>
<?php
echo \fim\site();
?>