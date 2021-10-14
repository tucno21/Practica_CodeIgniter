<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;

class Register extends BaseController
{
    public function index()
    {
        //instanciar el modelo
        $modelUser = model('UsersModel');

        $data = [
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'name' => 'carlos',
            'id_group' => 1,
            'surname' => 'tucno',
            'id_county' => 11,
            // 'created_at' => date('Y-m-d H:i:s'),
        ];

        $user = new User($data);
        //llamando a la funcion creada en la entidad para generar el username
        $user->generateUsername();

        $modelUser->save($user);
        // d($modelUser);

        return view('Auth/register');
    }
}
