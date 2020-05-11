<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');

//$routes->get('news/excluir/(:segment)','News::excluir/$1');


$routes->get('/', 'Home::index');

$routes->match(['get', 'post'], 'noticias/criar', 'Noticias::criar');
$routes->match(['get', 'post'], 'noticias/buscar', 'Noticias::buscar');
$routes->match(['get', 'post'], 'buscar', 'Home::buscar');

$routes->get('usuario', 'Usuario::index');
$routes->get('usuario/logout', 'Usuario::logout');
$routes->get('usuario/listarusuarios', 'Usuario::listarUsuarios');
$routes->get('usuario/criarusuario', 'Usuario::criarUsuario');
$routes->get('login', 'Usuario::login');

$routes->get('noticias', 'Noticias::index');
$routes->get('noticias/(:segment)', 'Noticias::ver/$1');
$routes->get('noticias/excluir/(:segment)', 'Noticias::excluir/$1');
$routes->get('noticias/editar/(:segment)', 'Noticias::editar/$1');

$routes->get('teste', 'Teste::index');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
