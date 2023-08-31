<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sapa/(:any)', 'Home::sapa/$1');
$routes->get('nama/(:any)/(:num)', 'Home::saya/$1/$2');
