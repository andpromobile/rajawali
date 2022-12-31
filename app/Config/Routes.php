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
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/produk', 'Produk::index');
$routes->get('/produk/form', 'Produk::form');
$routes->get('/produk/form/(:num)', 'Produk::form/$1');
$routes->post('/produk/insert', 'Produk::insert');
$routes->post('/produk/update/(:num)', 'Produk::update/$1');
$routes->get('/produk/hapus/(:num)', 'Produk::hapus/$1');
$routes->post('/produk/import', 'Produk::import_xl');

$routes->get('/satuan', 'Satuan::index');
$routes->get('/satuan/form', 'Satuan::form');
$routes->get('/satuan/form/(:num)', 'Satuan::form/$1');
$routes->post('/satuan/insert', 'Satuan::insert');
$routes->post('/satuan/update/(:num)', 'Satuan::update/$1');
$routes->get('/satuan/hapus/(:num)', 'Satuan::hapus/$1');

$routes->get('/supplier', 'Supplier::index');
$routes->get('/supplier/form', 'Supplier::form');
$routes->get('/supplier/form/(:num)', 'Supplier::form/$1');
$routes->post('/supplier/insert', 'Supplier::insert');
$routes->post('/supplier/update/(:num)', 'Supplier::update/$1');
$routes->get('/supplier/hapus/(:num)', 'Supplier::hapus/$1');

$routes->get('/customer', 'Customer::index');
$routes->get('/customer/form', 'Customer::form');
$routes->get('/customer/form/(:num)', 'Customer::form/$1');
$routes->post('/customer/insert', 'Customer::insert');
$routes->post('/customer/update/(:num)', 'Customer::update/$1');
$routes->get('/customer/hapus/(:num)', 'Customer::hapus/$1');

$routes->get('/profil', 'Profil::index');
$routes->post('/profil/update/(:num)', 'Profil::update/$1');
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
