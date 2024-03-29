<?php 

define("ROOT", "http://localhost/modelo-padrao-projetos-wb/modelo-with-component");

define("PATH_TEMPLATE", dirname(__DIR__,1).'/templates');

define("PATH_STATICS", 'templates/assets');

/**
 * FUNÇÕES DE AJUDA NO SISTEMA
 */

/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string {
    if ($uri) {
        return ROOT . "/{$uri}";
    }
    return ROOT;
} 
