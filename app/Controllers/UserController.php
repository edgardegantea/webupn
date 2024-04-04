<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class UserController extends BaseController
{
    protected $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'username' => 'required|min_length[3]|max_length[100]',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Nombre de usuario o contraseña incorrecta",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('auth/login', [
                    "validation" => $this->validator,
                ]);

            } else {
                $model = new UsuarioModel();

                $user = $model->where('username', $this->request->getVar('username'))->first();

                $this->setUserSession($user);

                if(($user['perfil'] == 1) && ($user['status'] == 1)) {
                    return redirect()->to(base_url('admin'));
                }

                if(($user['perfil'] == 2) && ($user['status'] == 1)) {
                    return redirect()->to(base_url('editor'));
                }

                if(($user['perfil'] == 3) && ($user['status'] == 1)) {
                    return redirect()->to(base_url('estudiante'));
                }
            }
        }
        return view('auth/login');
    }


    private function setUserSession($user)
    {
        $data = [
            'id'            => $user['id'],
            'nombre'        => $user['nombre'],
            'apaterno'      => $user['apaterno'],
            'amaterno'      => $user['amaterno'],
            'username'      => $user['username'],
            'email'         => $user['email'],
            'isLoggedIn'    => true,
            'perfil'        => $user['perfil'],
            'sexo'          => $user['sexo'],
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth/login');
    }



    public function forgotPasswordForm()
    {
        // Mostrar formulario para solicitar restablecimiento de contraseña
        return view('auth/forgot_password');
    }

    public function forgotPassword()
    {
        // Lógica para procesar la solicitud de restablecimiento de contraseña
        $email = $this->request->getPost('email');
        $user = $this->usuarioModel->where('email', $email)->first();

        if ($user) {
            // Generar token seguro para restablecer la contraseña
            $token = bin2hex(random_bytes(32));

            // Guardar el token en la base de datos
            $user->reset_token = $token;
            $this->usuarioModel->save($user);

            // Enviar correo electrónico al usuario con el enlace de restablecimiento de contraseña
            $email = \Config\Services::email();
            $email->setTo($user->email);
            $email->setSubject('Restablecer contraseña');
            $email->setMessage("Para restablecer su contraseña, haga clic en el siguiente enlace: <a href='" . site_url("reset-password/$token") . "'>Restablecer contraseña</a>");
            $email->send();

            // Redireccionar a una página de confirmación
            return redirect()->to('password-reset-link-sent');
        } else {
            // Si el correo electrónico no está registrado, mostrar un mensaje de error
            return redirect()->back()->with('error', 'El correo electrónico no está registrado en nuestro sistema.');
        }
    }

    public function resetPasswordForm($token)
    {
        // Verificar si el token es válido
        $user = $this->usuarioModel->where('reset_token', $token)->first();

        if ($user) {
            // Mostrar formulario para restablecer la contraseña
            return view('reset_password', ['token' => $token]);
        } else {
            // Si el token no es válido, redirigir a una página de error o mostrar un mensaje de error
            return redirect()->to('invalid-token');
        }
    }

    public function resetPassword()
    {
        // Lógica para restablecer la contraseña
        $token = $this->request->getPost('token');
        $password = $this->request->getPost('password');

        $user = $this->usuarioModel->where('reset_token', $token)->first();

        if ($user) {
            // Actualizar la contraseña y limpiar el token de restablecimiento
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            $user->reset_token = null;
            $this->usuarioModel->save($user);

            // Redireccionar a una página de confirmación
            return redirect()->to('password-reset-successful');
        } else {
            // Si el token no es válido, redirigir a una página de error o mostrar un mensaje de error
            return redirect()->to('invalid-token');
        }
    }



}


