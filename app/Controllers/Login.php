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
        // $data['msg'] = '';
        // if($this->request->is('post'))
        // {
        //     $usuarioModel = model('UsuarioModel');
        //     $usuarioData = $this->request->getPost();
        //     $checkUsuario = $usuarioModel->check(
        //         $usuarioData['email'],$usuarioData['senha']
        //     );
        //     if(! $checkUsuario){
        //         $data['msg'] = 'E-mail ou senha incorretos!';
        //     }else{
        //         $this->session->set('id_user', $checkUsuario->id_user);
        //         $this->session->set('nome', $checkUsuario->nome);
        //         $this->session->set('email', $checkUsuario->email);
        //         $this->session->set('endereco', $checkUsuario->endereco_user);
        //         $this->session->set('userType', $checkUsuario->user_type);
        //         return redirect()->to('/home');
        //     }
        //     return view('login', $data);
        // }
        
            if($this->request->is('post'))
    {
        $usuarioModel = model('UsuarioModel');
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $checkUsuario = $usuarioModel->check($email, $senha);

        if(!$checkUsuario){
            return redirect()->back()->with('msg', 'E-mail ou senha incorretos!');
        }

        // cria sessão
        session()->set([
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
        $data['msg'] = '';
        if($this->request->is('post')){
            $usuarioModel = model('UsuarioModel');
            try{
                $usuarioData = $this->request->getPost();
                $usuarioData['user_type'] = 'usuario';
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
