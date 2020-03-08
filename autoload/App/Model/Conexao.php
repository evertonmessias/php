<?php
namespace App\Model;
class Conexao
{       // padrão DAO , data access object (separa lógica dos dados)
    private static $instance;
    public static function getConn()
    {
        $config = Servidor::serv('i');        
        if (!isset(self::$instance)) {
            $dsn = "mysql:dbname=" . $config[3] . ";host=" . $config[0] . "";
            self::$instance = new \PDO($dsn, $config[1], $config[2]);
        }
        return self::$instance;
    }
}