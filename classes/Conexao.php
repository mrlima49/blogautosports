<?php

class Conexao{
    private static $pdo;

    public static function pdo(){
        if(!isset(self::$pdo)){
            self::$pdo = new PDO("mysql:host=localhost;dbname=blogautosports;charset=utf8", "root", "");
        }

        return self::$pdo;
    }

}