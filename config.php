<?php
function sessao($arquivo)
{
    session_start();
    if (!isset($_SESSION['nome'])) {
        header("Location:./login.php?arquivo=$arquivo");
    }
}

function sessao_mysql()
{
    session_start();
    if (!isset($_SESSION['user'])) {
        header('location:./teste08.php');
        return false;
    }else{
        return true;
    }
}

define('USERNAME', 'everton');
define('PASSWORD', 'notreve');
define('', '');

function servidor($local)
{
    if ($local == 'i') {
        define("servidor", "localhost");
        define("usuario", "root");
        define("senha", "");
        define("banco", "teste");
    } elseif ($local == 'e') {
        define("servidor", "remotemysql.com");
        define("usuario", "Apt7C6L8WG");
        define("senha", "dxM4djYWJW");
        define("banco", "Apt7C6L8WG");
    }
}
