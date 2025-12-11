<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RestauranteController extends BaseController
{
    public function index()
    {
        $restauranteModel = model('RestauranteModel');
        $dono = $restauranteModel->where('dono_fk', $this->session->get('id_user'))->first();
        if ($dono != null) {
            $this->session->set([
                'restaurante_id' => $dono->id_restaurante,
                'restaurante_nome' => $dono->nome_restaurante,
                'cnpj' => $dono->cnpj,
                'restaurante_endereco' => $dono->endereco_restaurante
            ]);
        }
        if(!$this->session->get('id_user')){
            return redirect()->to('/');
        }
        if($this->session->get('user_type') == 'dono' or $this->session->get('user_type') == 'ADM'){
            return view('formRestaurante');
        }
        
    }

    public function criarRestaurante(){
        if($this->request->is('post')){
            $restauranteModel = model('RestauranteModel');
            $restauranteData = $this->request->getPost();
            $restauranteData['dono_fk'] = $this->session->get('id_user');
            if($restauranteModel->insert($restauranteData)){
                $this->session->setFlashdata('msg', 'Restaurante cadastrado (●\'◡\'●) ');
                return redirect()->to('/home');
            }else{
                $this->session->setFlashdata('erro', 'Erro ao cadastrar restaurante! Tente novamente mais tarde.');
                return redirect()->to('/restaurante/restauranteForm');
            }
        }
    }
    //Função placeholder
    public function criarDono(){
        if(!$this->session->get('id_user')){
            return redirect()->to('/');
        }
        // if($this->request->is('post')){
            $usuarioModel=model('UsuarioModel');
            // $UsuarioData = $this->request->getPost();
            // $UsuarioData['user_type'] = 'dono';
            $usuario = $usuarioModel->find($this->session->get('id_user'));
            if($usuario->user_type != 'dono' and $usuario->user_type != 'ADM'){
                //https://www.codeigniter.com/userguide3/database/query_builder.html?highlight=update
                // $usuarioModel->where('id_user', $this->session->get('id_user'))->set('user_type','dono')->update();
                //https://codeigniter4.github.io/userguide/models/model.html#update
                $usuarioModel->update($this->session->get('id_user'), ['user_type' => 'dono']);
                $this->session->set('user_type','dono');
                $this->session->setFlashdata('msg', 'Agora você pode criar restaurante :3');
                return redirect()->to('home');
            }else{
                $this->session->setFlashdata('erro', 'Você já é um dono de restaurante!');
                return redirect()->to('home');
            }
        }
    // }

}