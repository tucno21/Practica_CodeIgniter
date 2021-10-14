<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;

class Register extends BaseController
{
    public $configs;

    public function __construct()
    {
        $this->configs =  config('Blog');
    }

    public function index()
    {
        //instanciar el modelo
        $modelUser = model('UsersModel');

        $data = [
            'email' => 'admin2@admin.com',
            'password' => 'admin',
            'name' => 'oscar',
            // 'id_group' => 1,
            'surname' => 'peru',
            'id_county' => 11,
            // 'created_at' => date('Y-m-d H:i:s'),
        ];

        $user = new User($data);
        //llamando a la funcion creada en la entidad para generar el username
        $user->generateUsername();
        // $modelUser->withGroup($this->configs->defaultGroup);
        //paso directo del grupo
        $modelUser->withGroup('admin');
        $modelUser->save($user);
        // d($modelUser->withGroup($this->configs->defaultGroup));

        return view('Auth/register');
    }
}
