<?php
namespace App\Model;
include 'config.php';
servidor('i');
class Conexao
{       // padrão DAO , data access object (separa lógica dos dados)
    private static $instance;
    public static function getConn()
    {
        if (!isset(self::$instance)) {
            $dsn = "mysql:dbname=" . banco . ";host=" . servidor . "";
            self::$instance = new \PDO($dsn, usuario, senha);
        }
        return self::$instance;
    }
}