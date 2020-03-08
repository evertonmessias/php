<?php
namespace App\Model;
class Servidor{
    
    private static $servidor;
    private static $usuario;
    private static $senha;
    private static $banco;

public static function serv($local)
{
    if ($local == 'i') {
        self::$servidor = "localhost";
        self::$usuario = "root";
        self::$senha = "efc2505xx";
        self::$banco = "pdo";
    } elseif ($local == 'e') {
        self::$servidor = "remotemysql.com";
        self::$usuario =  "Apt7C6L8WG";
        self::$senha = "dxM4djYWJW";
        self::$banco = "Apt7C6L8WG";
    }
    return array(self::$servidor,self::$usuario,self::$senha,self::$banco);
}
}
