<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('tabla', 'TablaController::index');
$routes->get('tabla/create', 'TablaController::create');
$routes->post('tabla/store', 'TablaController::store');
$routes->get('tabla/edit/(:num)', 'TablaController::edit/$1');
$routes->post('tabla/update/(:num)', 'TablaController::update/$1');
$routes->get('tabla/delete/(:num)', 'TablaController::delete/$1');
