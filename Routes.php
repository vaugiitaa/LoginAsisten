<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setAutoRoute(false);

$routes->get('/', 'Login::index');

// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
/*$routes->get('/', 'Home::index');

use App\Controllers\Pages;

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
*/

/*$routes->get('/todolist', 'Todolist::index');2
$routes->post('/todolist/addTask', 'Todolist::addTask');
$routes->get('/todolist/markAsDone/(:num)', 'Todolist::markAsDone/$1');
$routes->get('/todolist/deleteTask/(:num)', 'Todolist::deleteTask/$1');
*/

//latihan 1
/*$routes->get('ktp', 'Ktp::index');

//latihan 2
$routes->get('ktpm', 'Ktpm::index');
$routes->get('lihatKtm', 'Ktpm::indexKTM');

//latihan3
$routes->get('input', 'PesanController::input');
$routes->get('proses', 'PesanController::proses');

//latihan 4
$routes->get('inputData', 'Kelulusan::index');
$routes->post('prosesData', 'Kelulusan::processData');



use App\Controllers\News;
use App\Controllers\Pages;
$routes->match(['get', 'post'], 'news/create', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'view']);
$routes->get('news', [News::class, 'index']);
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);*/
/*
$routes->get('/asisten', 'AsistenController::index');

$routes->get('login', 'Login::index');
$routes->get('login/home', [Login::class, 'home']);
$routes->match(['get', 'post'], 'login/check', [Login::class, 'check']);
$routes->get('login/logout', [Login::class, 'logout']);
$routes->match(['get', 'post'], 'asisten/search', 'AsistenController::search');
$routes->get('/asisten', 'AsistenController::index');
*/

use App\Controllers\AsistenController;


$routes->get('/asisten', 'AsistenController::index');
$routes->match(['get', 'post'], 'asisten/search', [AsistenController::class, 'search']);


$routes->match(
    ['get', 'post'],
    'asisten/simpan',
    [
        AsistenController::class,
        'simpan'
    ]
);
$routes->match(
    ['get', 'post'],
    'asisten/update',
    [
        AsistenController::class,
        'update'
    ]
);
$routes->match(
    ['get', 'post'],
    'asisten/delete',
    [
        AsistenController::class,
        'delete'
    ]
);

// $routes->match(
//     ['get', 'post'],
//     'asisten/login',
//     [AsistenController::class, 'login']
// );

// $routes->match(
//     ['get', 'post'],
//     'asisten/cekLogin',
//     [AsistenController::class, 'cekLogin']
// );

$routes->delete('asisten/delete', 'AsistenController::delete/$1');
$routes->get('asisten/update', 'AsistenController::update/$1');
$routes->post('asisten/update', 'AsistenController::processUpdate');
$routes->get('asistenlogin', 'AsistenController::cekLogin');



use App\Controllers\Login;

// $routes->get('login', 'Login::index');
// $routes->get('login/home', [Login::class, 'home']);
// $routes->match(['get', 'post'], 'login/check', [Login::class, 'check']);
// $routes->get('login/logout', [Login::class, 'logout']);





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