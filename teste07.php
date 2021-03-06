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
            <small class='file'>Tamanho máx. 1MB</small>
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
                // chdir(muda_pasta);
                // mkdir(nova_pasta);
                // rmdir(remove_pasta);
                $diretorio = opendir($pasta);
                //$diretorio = scandir($pasta); ==> array
                echo "<p>Lista de Arquivos</p><br><table class='arquivos'>";
                echo "<tr><th class='col1'>Name</th><th>Size</th></tr>";
                while ($arquivo = readdir($diretorio)) {
                    if ($arquivo != '.' && $arquivo != '..') {
                        echo "<tr><td class='col1'><a href='" . $pasta . $arquivo . "'>" . $arquivo . "</a></td>
                        <td>" . number_format(((filesize($pasta . $arquivo)) / 1024), 1) . " KB</td></tr>";
                    }
                }
                echo "</table>";
                closedir($diretorio);
            }
            ?>
        </div>
    </fieldset>
    <fieldset class='f2'>
        <legend>
            <h2>Escrever no Texto</h2>
        </legend>
        <form method="POST"><br>
            <input type="text" class='escrever' name="escrever"><br>
            <input type="submit" class="botao" name="botao2" value="Enviar" />
        </form>
        <?php
        $path = './log/portfolio.txt';
        /*
        copy(original,final);
        rename(original,final);
        unlink(arquivo);
        */
        function ler($path) // ler arquivo
        {
            if (file_exists($path)) {
                $arquivo = fopen($path, 'r');
                while ($linha = fgets($arquivo)) {
                    echo $linha . "<br>";
                }
                fclose($arquivo);
                /*
            $arquivo = file($path); // file converte para array
            foreach($arquivo as $linha){
                echo $linha."<br>";
            }*/
                /*
            $arquivo = file_get_contents($path);
            echo $arquivo;
            */
            } else {
                echo "O arquivo $path não existe!";
            }
        }
        function escrever($path, $texto) // gravar arquivo
        {
            $arquivo = fopen($path, 'a+'); //'a' cria se ñ existir e crescenta valor
            fwrite($arquivo, $texto . "\n"); // 'w' cria se ñ existir e altera valor
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