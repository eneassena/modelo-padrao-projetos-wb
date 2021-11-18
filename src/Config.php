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


/**
 * função responsavel por verificar se uma informação existe
 * e se é valido para uma manipulação
 */
function valida_exibicao(array $data): bool
{
    return isset($data) && count($data) > 0;
}


/**
 * Verifica se existe um usuario logado no sistema
 */
function user_load()
{
    return isset($_SESSION['person_comun']['on']) ?
        $_SESSION['person_comun']['on']['id'] : 0;
}


/**
 * Formata um valor float e retorna no formado para exibição em tela
 *
 * @param float $preco
 * @return float
 */
function formata_precos(string $preco): string
{
    return number_format((float)$preco, 2, ',', '.');
}


/**
 * função responsavel por verificar a existencia dos items do carrinho
 */
function valida_pastels()
{
    $return = false;
    if (isset($_SESSION['pastel'])) {
        if (count($_SESSION['pastel']) >= 1) {
            $total = 0;
            foreach ($_SESSION['pastel'] as $id_item => $quantidade) {
                $total += $quantidade;
            }
            $return = ($total >= 3) ? true : false;
        }
    } 
    return $return;
}

/**
 * metodo verifica se uma informação existe
 */
function field_valido($data = '')
{
    return isset($data) ? $data : '';
}