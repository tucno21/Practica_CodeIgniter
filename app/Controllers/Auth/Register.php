<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            'email' => 'cc@example.com',
            'password' => 'admin',
            'name' => 'carlos',
            'surname' => 'tucno',
            'id_county' => 11,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $user = new User($data);
        //llamando a la funcion creada en la entidad para generar el username
        $user->generateUsername();

        d($user->username);

        return view('Auth/register');
    }
}
