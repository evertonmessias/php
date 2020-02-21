<?php

namespace inicio;
namespace fim;

include 'teste06_site.php';
echo \inicio\site();
?>
<form method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>
            <h2>Envio de Arquivo</h2>
        </legend>
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576‬">
        <input type="file" name="arquivo">
        <small>Tamanho máx. 1MB</small>
        <br>
        <input type="submit" class="botao" name="botao" value="Enviar" />
        <br>
        <div class="resp">
            <?php
            if (isset($_POST['botao'])) {
                $arquivo = $_FILES['arquivo'];
                echo "Nome: " . $arquivo['name'] . "<br>";
                echo "Tamanho: " . $arquivo['size'] . "<br>";
                echo "Tipo: " . $arquivo['type'] . "<br>";
                echo "Nome Temp: " . $arquivo['tmp_name'] . "<br>";
                echo "Erro: " . $arquivo['error'] . "<br><br>";

                if ($arquivo['type'] == "image/png" || $arquivo['type'] == "image/jpeg") {
                    $envio = move_uploaded_file($arquivo['tmp_name'], "img/" . $arquivo['name']);
                    if ($envio) {
                        echo "<span class='ok'>SUCESSO:</span><br><br>";
                        echo "<a href='img/" . $arquivo['name']
                            . "' target='_blank'><img src='img/" . $arquivo['name']
                            . "' title='" . $arquivo['name']
                            . "'></a><br>";
                    }
                } else {
                    echo "<span class='ko'>Não é uma foto</span>";
                }
            }
            ?>
        </div>
    </fieldset>
</form>

<?php 
echo \fim\site();
?>