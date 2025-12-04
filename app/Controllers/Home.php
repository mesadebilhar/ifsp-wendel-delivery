<?php

namespace App\Controllers;
use CodeIgniter\HTTP\ResponseInterface;
use App\Controllers\BaseController;
class Home extends BaseController
{
    public function index()
    {
        if(!session('id_user')) {
            return redirect()->to('/'); // volta pro login
        }
         $restauranteModel = model('RestauranteModel');
         $UsuarioModel = model('UsuarioModel');
         $data['restaurante'] = $restauranteModel->getRestaurantes();
         $data['usuario'] = $UsuarioModel->findAll(); //Num banco de dados grande isso nao eh aceitavel mas pra fins de estudo.
        // return print_r($data['usuario']);
        
        return  view('home', $data);

       }
}
