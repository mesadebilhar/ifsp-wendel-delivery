<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

//https://codeigniter.com/user_guide/outgoing/response.html

    public function logar(){
        $data['msg'] = '';
        if($this->request->is('post'))
        {
            $usuarioModel = model('UsuarioModel');
            $usuarioData = $this->request->getPost();
            $checkUsuario = $usuarioModel->check(
                $usuarioData['email'],$usuarioData['senha'] 
            );
            if(! $checkUsuario){
                $data['msg'] = 'E-mail ou senha incorretos!';
            }else{
                $this->session->set('id_user', $checkUsuario->id);
                $this->session->set('nome', $checkUsuario->nome);
                $this->session->set('perfil', $checkUsuario->perfil);
            }
        }
    }

    public function registrar(){
        $data['msg'] = '';
        if($this->request->is('post')){
            $usuarioModel = model('UsuarioModel');
            try{
                $usuarioData = $this->request->getPost();
                $usuarioData['userType'] = 'usuario';
                if($usuarioModel->insert($usuarioData)) {
                    $data['msg'] = "Usuário criado com sucesso";
                }
                else {
                    $data['msg'] = "Erro ao criar usuário";
                    $data['errors'] = $usuarioModel->errors();
                }
            }
            catch(\Exception $e) {
                $data['msg'] = "Erro ao criar usuário: " . $e->getMessage();
            }
        }
        return redirect()->to('/login')->withInput()->with('msg', $data['msg']);
    }
}
