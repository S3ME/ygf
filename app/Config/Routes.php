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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
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
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('program', 'Home::program');
$routes->group('news', static function ($routes) {
    $routes->get('', 'Home::news');
    $routes->get('(:any)', 'Home::newsdetail/$1');
});
$routes->get('galeri', 'Home::gallery');
$routes->get('galeri/day1', 'Home::day1');
$routes->get('galeri/day2', 'Home::day2');
$routes->get('galeri/day3', 'Home::day3');
$routes->get('galeri/day4', 'Home::day4');
$routes->get('galeri/day5', 'Home::day5');
$routes->get('partners', 'Home::partners');
$routes->get('merchandise', 'Home::merchandise');
$routes->post('sendmessage', 'Home::sendmessage');
$routes->get('showmessage', 'Home::showmessage');
$routes->get('clearchat', 'Home::softcleatchat');
$routes->get('purgechat', 'Home::purgechat');
$routes->get('test', 'Home::test');
$routes->get('clearsession', 'Home::clearsession');
$routes->get('migration', 'Home::migration');

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
