<?php
function sessao($arquivo){
session_start();
if (!isset($_SESSION['nome'])){
    header("Location:./login.php?arquivo=$arquivo");
}
}
define('USERNAME','everton');
define('PASSWORD','notreve');
define('','');
$servidor = "localhost";
$usuario = "root";
$senha = "";
$tabela = "teste";
