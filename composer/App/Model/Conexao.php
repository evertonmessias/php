
<?php
include '../../../config.php';
servidor('i');

class Conexao
{
    private static $instance;
    public static function getConn()
    {
        if (!isset(self::$instance)) {
            $dsn = "mysql:dbname=" . banco . ";host=" . servidor . "";
            self::$instance = new PDO($dsn, usuario, senha);          
        }else{
            return self::$instance;
        }
    }
}
