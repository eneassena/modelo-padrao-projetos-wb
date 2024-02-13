<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


use Symfony\Component\Dotenv\Dotenv;
//
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');
 

define('DB_NAME', "test_db_pastelaria");
/** constante de conexão de banco de dados */
define("DATA_LAYER_CONFIG", [
    "driver"    => $_ENV['DB_DRIVER'],
    "host"      => $_ENV['DB_HOST'],
    "port"      => $_ENV['DB_PORT'],
    "dbname"    => DB_NAME,
    "username"  => $_ENV['DB_USER'],
    "passwd"    => $_ENV['DB_PASSWD'],
    "options"   => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]); 

// www.meusite.com.br
define("ROOT", "http://127.0.0.1:8000");


/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }
    return ROOT;
}
/**
 * @param string|null $uri
 * @return string
 */
function assets(string $uri = null): string
{
    $path_public = ROOT . "/Src/view";

    if ($uri) {
        return $path_public . "/{$uri}";
    }

    return $path_public;
}