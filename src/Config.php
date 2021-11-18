<?php 

define("ROOT", "http://localhost/website_pastelaria");

define("PATH_TEMPLATE", "C:\\xampp\\htdocs\\website_pastelaria\\templates");

define("PATH_STATICS", "C:\\xampp\htdocs\\website_pastelaria\\templates\\static");

/**
 * configuração do banco de dados
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "modelando_pastelaria",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

 

/**
 * FUNÇÕES DE AJUDA NO SISTEMA
 */

/**
 * metodo responsavel por retornar o caminho das templates
 */
function path_templates($temp = ''){
    if($temp) {
        return PATH_TEMPLATE."/".$temp;
    } else {
        return PATH_TEMPLATE;
    }
}
/**
 * metodo responsavel por retornar o caminho dos arquivos statics 
 * como: image, css e js
 */
function path_static($temp = ''){
    if($temp) {
        return PATH_STATICS."/".$temp;
    } else {
        return PATH_STATICS;
    }
}

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
    $path_public = ROOT . "/templates/static";
    if ($uri) {
        return $path_public . "/{$uri}";
    }

    return $path_public;
}

 