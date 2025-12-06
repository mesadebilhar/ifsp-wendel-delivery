<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
     // tem session redireciona para a home
        if($this->session->get('id_user')){
            return redirect()->to('/home');
        }
        return view('login');
    }

//https://codeigniter.com/user_guide/outgoing/response.html

    public function logar(){
    if($this->request->is('post'))
    {

        $usuarioModel = model('UsuarioModel');
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $checkUsuario = $usuarioModel->check($email, $senha);

        if(!$checkUsuario){
            $this->session->setFlashdata('erro','E-mail ou senha incorretos!');
            return redirect()->to('/');
        }

        // cria sessão
        $this->session->set([
            'id_user'   => $checkUsuario->id_user,
            'nome'      => $checkUsuario->nome,
            'email'     => $checkUsuario->email,
            'endereco'  => $checkUsuario->endereco_user,
            'user_type'  => $checkUsuario->user_type,
        ]);
        return redirect()->to('/home');
    }

    return view('login');
    }

    public function registrar(){
        if($this->request->is('post')){
            $usuarioModel = model('UsuarioModel');
            try{
                $usuarioData = $this->request->getPost();
                $usuarioData['user_type'] = 'usuario';


                if($usuarioModel->contaRegistrada($usuarioData['email'])) {
                    $this->session->setFlashdata('erro', 'E-mail já cadastrado.');
                    return redirect()->to('/');
                }
                if($usuarioModel->insert($usuarioData)) {
                    $this->session->setFlashdata('msg', 'Usuário criado com sucesso!');
                }
                else {
                    $this->session->setFlashdata('erro', 'Erro ao criar usuário.');
                    $this->session->setFlashdata('errors', $usuarioModel->errors());
                }
            }
            catch(\Exception $e) {
                $this->session->setFlashdata('erro', 'Erro ao criar usuário: ' . $e->getMessage());
            }
        }
        return redirect()->to('/');
    }

    public function testeSession(){
        $this->session->set([
            'id_user'   => 1,
            'nome'      => 'Teste',
            'email'     => 'user@teste.com',
            'endereco'  => 'Rua Teste, 123',
            'user_type'  => 'user',
        ]);
        return redirect()->to('/home');
    }

    public function logoutTeste(){
        $this->session->destroy();
        return redirect()->to('/');
    }
}
