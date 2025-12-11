<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Login::index'); 
$routes->post( '/login', 'Login::logar'); //endpoint sem view        
$routes->post( '/registrar', 'Login::registrar'); //endpoint sem view
$routes->get('/home', 'Home::index');
$routes->get('/logout', 'Logout::index');
$routes->post('/teste', 'Login::testeSession'); //endpoint sem view
$routes->get('/destruir', 'Login::logoutTeste'); //endpoint sem view
$routes->get('/parceria', 'restauranteController::criarDono'); //endpoint sem view

//Colocando como dono pq parceiro ou partnership são grandes.
$routes->group('restaurante', ['filter' => 'authfilter:ADM,dono'], function($routes){
    $routes->get('restauranteForm', 'RestauranteController::index');
    $routes->post('restauranteCadastro', 'RestauranteController::criarRestaurante'); 
});

