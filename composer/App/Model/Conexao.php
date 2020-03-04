
<?php
include '';
servidor();

class Conexao{
    private static $instance;
    public static function getConn(){
        if(!isset(self::$instance)){
            self::$instance = new PDO()
        }
    }

}