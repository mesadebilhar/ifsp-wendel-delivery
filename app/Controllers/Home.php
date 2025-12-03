<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $restauranteModel = model('RestauranteModel');
        $data['restaurante'] = $restauranteModel->getRestaurantes();
        return view('home',$data);
    }
}
