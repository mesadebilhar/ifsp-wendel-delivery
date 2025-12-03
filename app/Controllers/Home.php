<?php

namespace App\Controllers;
class Home extends BaseController
{
    public function index(): string
    {
         $restauranteModel = model('RestauranteModel');
         $UsuarioModel = model('UsuarioModel');
         $data['restaurante'] = $restauranteModel->getRestaurantes();
        //  $data['usuario'] = $UsuarioModel->findAll();
        // return print_r($data['usuario']);
        return  view('home', $data);

       }
}
