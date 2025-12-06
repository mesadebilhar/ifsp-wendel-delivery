<?php

namespace App\Controllers;
use CodeIgniter\HTTP\ResponseInterface;
use App\Controllers\BaseController;
class Home extends BaseController
{
    public function index()
    {
        //https://codeigniter.com/user_guide/libraries/sessions.html#retrieving-session-data Corrigir.
        if(!$this->session->get('id_user')) {
            return redirect()->to('/'); // volta pro login
        }
         $restauranteModel = model('RestauranteModel');
         $data['restaurante'] = $restauranteModel->getRestaurantes();
        // return print_r($data['usuario']);
        
        return  view('home', $data);

       }
}
