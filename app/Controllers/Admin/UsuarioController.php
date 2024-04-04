<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UsuarioModel;
use App\Models\PerfilModel;

class UsuarioController extends ResourceController
{
    private $usuario;
    private $perfil;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        $this->usuario = new UsuarioModel();
        $this->perfil = new PerfilModel();
    }


    public function index()
    {
        $usuarios = $this->usuario->findAll();


        $data = [
            'usuarios' => $usuarios,
            'perfiles'  => $this->perfil->findAll()
        ];

        return view('admin/usuarios/index', $data);
    }


    public function show($id = null)
    {
        //
    }


    public function new()
    {
        $data = [
            'perfiles'  => $this->perfil->findAll()
        ];

        return view('admin/usuarios/create', $data);
    }


    public function create()
    {
        $data = [
            'perfil' => $this->request->getVar('perfil'),
            'identificador' => $this->request->getVar('identificador'),
            'nombre' => $this->request->getVar('nombre'),
            'apaterno' => $this->request->getVar('apaterno'),
            'amaterno' => $this->request->getVar('amaterno'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'sexo' => $this->request->getVar('sexo'),
            'status'    => $this->request->getVar('status'),
            'fecha_nacimiento' => $this->request->getVar('fecha_nacimiento')
        ];

        $rules = [
            'identificador' => 'required|is_unique[usuarios.identificador]',
            'password'      => 'required|min_length[8]|max_length[30]',
            'email'    => 'required|valid_email'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/admin/usuarios/new')->withInput()->with('errors', $this->validator->getErrors());
        }

        $allowedDomain = 'teziutlan.tecnm.mx';
        $emailDomain = explode('@', $data['email'])[1];

        if ($emailDomain !== $allowedDomain) {
            return redirect()->to('/admin/usuarios/new')->withInput()->with('error', 'El correo electrónico debe ser del dominio institucional.');
        }

        $this->usuario->insert($data);

        return redirect()->to('/admin/usuarios')->with('success', 'Usuario creado exitosamente.');
    }
    

    public function edit($id = null)
    {
        $usuario = new UsuarioModel();
        $data['usuario'] = $usuario->find($id);

        return view('admin/usuarios/edit', $data);
    }


    public function update($id = null)
    {
        $usuario = new UsuarioModel();
        $data = [
            'rol' => $this->request->getVar('rol'),
            'nombre' => $this->request->getVar('nombre'),
            'apaterno' => $this->request->getVar('apaterno'),
            'amaterno' => $this->request->getVar('amaterno'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            // 'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'sexo' => $this->request->getVar('sexo'),
            'fechaNacimiento' => $this->request->getVar('fechaNacimiento'),
            'status' => $this->request->getVar('status'),
            'estatusDD' => $this->request->getVar('estatusDD'),
            'condicion' => $this->request->getVar('condicion'),
            'numHoras' => $this->request->getVar('numHoras')
        ];

        $usuario->update($id, $data);

        return redirect()->to('/admin/usuarios');
    }


    public function delete($id = null)
    {
        $usuario = new UsuarioModel();
        $usuario->delete($id);

        return redirect()->to('/admin/usuarios');
    }




    public function editPassword($id)
    {
        $data['usuario'] = $this->usuario->find($id);

        if (!$data['usuario']) {
            return redirect()->to('/admin/usuarios')->with('error', 'Usuario no encontrado.');
        }

        return view('admin/usuarios/editar_password', $data);
    }


    public function updatePassword($id)
    {
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->find($id);

        if (!$usuario) {
            return redirect()->to('/admin/usuarios')->with('error', 'Usuario no encontrado.');
        }

        $newPassword = $this->request->getPost('new_password');
        if (empty($newPassword)) {
            return redirect()->back()->with('error', 'La nueva contraseña no debe estar vacía.');
        }

        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $usuarioModel->update($id, ['password' => $hashedPassword]);

        return redirect()->to('/admin/usuarios')->with('success', 'Contraseña actualizada exitosamente.');
    }




}
