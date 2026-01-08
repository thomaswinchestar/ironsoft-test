<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home page routes
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');

// Features page route
$routes->get('features', 'Home::features');

// About page route
$routes->get('about', 'Home::about');

// Career page route
$routes->get('career', 'Home::career');

// Products routes
$routes->get('products', 'Products::index');
$routes->get('products/(:segment)', 'Products::show/$1');

// API routes for JSON data
$routes->get('api/site-data', 'Api::siteData');
