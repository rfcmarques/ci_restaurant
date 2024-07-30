<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('products', 'Home::products');
$routes->get('where_we_are', 'Home::where_we_are');
