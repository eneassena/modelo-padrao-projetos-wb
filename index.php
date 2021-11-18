<?php 

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;



$route = new Router(ROOT);

$route->namespace("Source\App\Controller\Cliente");
 
/**
 * Controller: CardapioController
 * Metodo: home
 */
$route->group(null);
$route->get("/", "HomeController:home");
// $route->get("/{message}", "Home:home", "name.home");
// $route->get("/cadastro/store/message", "Home:obtem_params", "name.obtem_params");


/**
 * Sobre
 * Ex: www.site.com/sobre
 */
$route->group('sobre');
$route->get('/', "SobreController:home", "name.sobre");


/**
 * Cardapio
 * Ex: www.site.com/cardapio
 */
$route->group('cardapio');
$route->get('/', "CardapioController:home", "name.cardapio");



/**
 * verPerdido
 * Ex: www.site.com/ver-pedido
 */
$route->group('ver-pedido');
$route->get('/', "VerPedidoController:home", "name.ver-pedido");



/**
 * Pedido
 * Ex: www.site.com/pedido
 */
$route->group('pedido');
$route->get("/", "PedidoController:home", "name.pedido");

// if (isset($_SESSION['person_comun']['on'])) {
    /**
     * verPerdido
     * Ex: www.site.com/ver-pedido
     */
    // $route->group('ver-pedido');
    // $route->get('/', "VerPedido:home", "name.ver-pedido");
    // $route->get('/{message}', "VerPedido:home", "name.ver-pedido");
    // $route->get('/show-pedidos', "VerPedido:show_all_pedidos", "name.show.pedido");


    /**
     * Pedido
     * Ex: www.site.com/pedido
     */
    // $route->group('pedido');
    // $route->get("/", "Pedido:home", "name.pedido");
    // $route->get("/{message}", "Pedido:home", "name.pedido");
    // $route->get("/detalhes/{produto}", "Pedido:detalhes", "name.detalhes");

//     $route->get("/pastels", "Pedido:pastels", "pedido.pastels");

//     $route->get("/add-pastel/{idProduto}", "Pedido:add_pastel", "pedido.add_pastel");
//     $route->get("/remove-pastel/{idProduto}", "Pedido:remove_pastel", "pedido.remove_pastel");

//     $route->get("/add-bebida/{idProduto}", "Pedido:add_bebida", "pedido.add_bebida");
//     $route->get("/remove-bebida/{idProduto}", "Pedido:remove_bebida", "pedido.remove_bebida");
//     $route->get("/clean/{cartname}", "Pedido:clean", "pedido.clean");
//     $route->post("/caixa", "Pedido:caixa", "pedido.caixa");
// }
/**
 * Cliente
 * Rotas de realização de login e logout 
 *
 */
// $route->group('cliente');
// $route->post("/check-login", "Cliente:check_login");
// $route->get("/cadastro", "Cliente:create", "name.create");
// $route->get("/cadastro/{message}", "Cliente:create", "name.create");
// $route->get("/logout", "Cliente:logout", "name.logout");
// $route->post("/cadastro/store", "Cliente:store", "name.store");
// if (isset($_SESSION['person_comun']['on'])) {}


// namespace Source/App/Admin
// $route->namespace("Source\App\Admin");
/**
 * Rotas area-restrita
 * Ex: www.site.com/area-restrita
 */

// $route->group('area-restrita');
// painel de acesso
// $route->get("/login-admin", "areaRestrita:login_admin", "areaRestrita.login_admin");
// $route->get("/login-admin/{message}", "areaRestrita:login_admin", "areaRestrita.login_admin");
// $route->post("/login-validate", "areaRestrita:login_validate", "areaRestrita.login_validate");

// if (isset($_SESSION['person_admin']['on'])) {

    // main
    // $route->get("/", "areaRestrita:home", "areaRestrita.home");
    // $route->get("/{message}", "areaRestrita:home", "areaRestrita.home");

    // servicos
    // $route->get("/pastel", "areaRestrita:pastel", "areaRestrita.pastel");
    // $route->post("/pastel", "areaRestrita:store_p'      astel", "areaRestrita.pedido");
    // $route->get("/bebida", "areaRestrita:bebida", "areaRestrita.bebida");
    // $route->get("/produtos", "areaRestrita:produtos", "areaRestrita.produtos");

    // $route->get("/logout", "areaRestrita:logout", "areaRestrita.logout");
    // $route->get("/seja-bem-vindo/{message}", "areaRestrita:seja_bem_vindo", "areaRestrita.seja_bem_vindo");
    // $route->get("/cadastro-store", "areaRestrita:store", "areaRestrita.store");
    // formulario de pedidos
    // $route->get("/pedido-all", "areaRestrita:relatorio_pedido", "areaRestrita.relatorio_pedido");

    // logout
    // $route->get("/logout", "areaRestrita:logout", "auth.logout");

    // namespace Source/App/Admin
    // $route->namespace("Source\App\Auth");

    // $route->group('auth');
    // $route->post("/", "AuthController:auth", "auth.token");
// }


$route->dispatch();

if($route->error()){
    var_dump($route->error());
}
