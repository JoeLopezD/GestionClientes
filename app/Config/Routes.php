<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'GestionClientesController::index');
$routes->get('/clientes', 'GestionClientesController::index');


$routes->get('/clients/create', 'GestionClientesController::create');
$routes->post('/clients/create', 'GestionClientesController::create_post');

$routes->get('/clientsDetall/(:segment)', 'GestionClientesController::view/$1');
$routes->get('/clients/update/(:segment)', 'GestionClientesController::update/$1');
$routes->post('/clients/update', 'GestionClientesController::update_post');
$routes->get('/clients/delete/(:segment)', 'GestionClientesController::deleteClient/$1');


$routes->get('/productes/afegir/(:segment)', 'GestionProductosController::create/$1');

$routes->post('/nouproducte/(:segment)', 'GestionProductosController::addProducte/$1');

$routes->get('/productes/update/(:segment)/(:segment)', 'GestionProductosController::add/$1/$2');

$routes->post('/updateProducte/(:segment)', 'GestionProductosController::updateProducte/$1');

$routes->get('/productes/veure/(:segment)/(:segment)', 'GestionProductosController::view/$1/$2');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
