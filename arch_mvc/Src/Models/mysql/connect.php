<?php

define("DATA_LAYER_CONFIG", [
    "driver"    => 'mysql',
    "host"      => 'localhost',
    "port"      => 3306,
    "dbname"    => '',
    "username"  => '',
    "passwd"    => '',
    "options"   => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


abstract class Connect
{
    private const DB_DRIVER = "mysql:host=%s;dbname=%s;";
    private static PDO $conexao;
    private static \PDOException $error;
    private static string $servername;
    private static string $password;
    private static string $username;
    private static string $database;

    public static function getInstance(): PDO
    {
        try {

            if (is_null(self::$conexao)) {
                $stringSource = printf(
                    Connect::DB_DRIVER,
                    self::$servername,
                    self::$database
                );
                self::$conexao  = new \PDO(
                    $stringSource,
                    self::$username,
                    self::$password,
                    DATA_LAYER_CONFIG['options']
                );
                self::$conexao->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
            }
        } catch (PDOException $error) {
            self::$error = $error;
        }
        return self::$conexao;
    }

    public static function getError(): PDOException
    {
        return self::$error;
    }
}


var_dump([]);