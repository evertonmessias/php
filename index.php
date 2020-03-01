<?php

namespace inicio;

namespace fim;

include 'htmlcss.php';
echo \inicio\site();
include 'config.php';
sessao(basename(__FILE__));
?>
<fieldset class="index">
    <legend>
        <h3>PHP e MySQL</h3>
    </legend>
    <ul>
        <!-- INICIO do /index.php -->
        <li><a href="./index_aux.php?file=teste01.php" target="_blank">Teste 01 - Olá Mundo</a></li>
        <li><a href="./index_aux.php?file=teste02.php" target="_blank">Teste 02 - Sintaxe Básica</a></li>
        <li><a href="./index_aux.php?file=teste03.php" target="_blank">Teste 03 - Ex. IMC</a></li>
        <li><a href="./index_aux.php?file=teste04.php" target="_blank">Teste 04 - Query String / Menu</a></li>
        <li><a href="./index_aux.php?file=teste05.php" target="_blank">Teste 05 - CSS com PHP</a></li>
        <li><a href="./index_aux.php?file=teste06.php" target="_blank">Teste 06 - Cookie & Session</a></li>
        <li><a href="./index_aux.php?file=teste07.php" target="_blank">Teste 07 - Upload & File</a></li>
        <li><a href="./index_aux.php?file=teste08.php" target="_blank">Teste 08 - MySQLi & PDO</a></li>
        <li><a href="./index_aux.php?file=teste09.php" target="_blank">Teste 09 - Sintaxe Básica O.O.</a></li>
        <li><a href="./index_aux.php?file=teste10.php" target="_blank">Teste 10 - Herança</a></li>
        <li><a href="./index_aux.php?file=teste11.php" target="_blank">Teste 11 - Eq. 2ºGrau POO</a></li>
        <!-- FIM do /index.php -->
        <li><a href="./index.php" target="_blank"><b>(Fontes)</b></a></li>
    </ul>
    <br>
</fieldset>
<?php
echo \fim\site();
?>