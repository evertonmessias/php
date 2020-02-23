<?php

namespace inicio;

namespace fim;

include 'htmlcss.php';
echo \inicio\site();
include 'config.php';
sessao(basename(__FILE__));
?>
<div id="area">
    <fieldset class='f1'>
        <legend>
            <h2>Envio de Arquivo</h2>
        </legend>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576‬">
            <input type="file" name="arquivo">
            <small>Tamanho máx. 1MB</small>
            <br>
            <input type="submit" class="botao" name="botao" value="Enviar" />
        </form>
        <br>
        <div class="resp">
            <?php // se botao 1 ativado
            // Upload arquivo
            if (isset($_POST['botao'])) {
                $arquivo = $_FILES['arquivo'];
                if ($arquivo['size'] != 0) {
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
                } else {
                    echo "<p>Escolha um arquivo !!!</p>";
                }
            } else { // Lista diretorio
                $pasta = 'img/';
                $diretorio = opendir($pasta);
                echo "<p>Lista de Arquivos</p>";
                while (($arquivo = readdir($diretorio)) !== false) {
                    if ($arquivo == "." || $arquivo == "..") {
                    } else {
                        echo '<a href=' . $pasta . $arquivo . '>' . $arquivo . '</a><br />';
                    }
                }
                closedir($diretorio);
            }

            ?>
        </div>
    </fieldset>
    <fieldset class='f2'>
        <legend>
            <h2>Escrever no Arquivo.TXT</h2>
        </legend>
        <form method="POST"><br>
            <input type="text" class='escrever' name="escrever"><br>
            <input type="submit" class="botao" name="botao2" value="Enviar" />
        </form>
        <?php
        $path = './log/portfolio.txt';
        function ler($path) // ler arquivo
        {
            $arquivo = fopen($path, 'r');
            while (true) {
                $linha = fgets($arquivo);
                echo "$linha<br>";
                if ($linha == null) break;
            }
            fclose($arquivo);
        }
        function escrever($path, $texto) // gravar arquivo
        {
            $arquivo = fopen($path, 'a+'); //a crescenta, w novo
            fwrite($arquivo, $texto . "\n");
            fclose($arquivo);
        }
        // se botao 2 ativado
        if (isset($_POST['botao2'])) {
            $texto = $_POST['escrever'];
            if ($texto) {
                escrever($path, $texto);
                ler($path);
            } else {
                echo "<p>Digite algo ..</p>";
            }
        } else {
            ler($path);
        }
        ?>
    </fieldset>
</div>
<?php
echo \fim\site();
?>