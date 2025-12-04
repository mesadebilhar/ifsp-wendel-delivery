<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// // $routes->get('/', 'Login::index'); <- Testar
// $routes->get('/home', 'Home::index');

// $routes->match(['get', 'post'],'/', 'Login::logar');
$routes->match(['get','post'], '/', 'Login::logar');        // login
$routes->match(['get','post'], '/registrar', 'Login::registrar'); // registrar
$routes->get('/home', 'Home::index');
$routes->get('/logout', 'Logout::index');