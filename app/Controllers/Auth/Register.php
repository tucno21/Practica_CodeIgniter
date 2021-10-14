<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Entities\UserInfo;

class Register extends BaseController
{
    public $configs;

    public function __construct()
    {
        $this->configs =  config('Blog');
    }

    public function register()
    {
        //instanciar el modelo
        $modelUser = model('UsersModel');

        $data = [
            'email' => 'admim8@admin.com',
            'password' => 'admin',
            'name' => 'juana',
            // 'id_group' => 1,
            'surname' => 'perez',
            'id_county' => 10,
            // 'created_at' => date('Y-m-d H:i:s'),
        ];

        $user = new User($data);
        //llamando a la funcion creada en la entidad para generar el username
        $user->generateUsername();
        // $modelUser->withGroup($this->configs->defaultGroup);
        //paso directo del grupo
        $modelUser->withGroup('admin');

        //====================================
        $userInfo = new UserInfo($data);
        $modelUser->addUserInfo($userInfo);

        // $modelUser->save($user);
        // d($modelUser->withGroup($this->configs->defaultGroup));

        $modelCountries = model('CountriesModel');
        $paises = $modelCountries->findAll();
        // d($paises);

        return view('Auth/register', [
            'paises' => $paises,
        ]);
    }


    public function login()
    {
        return view('Auth/login');
    }
}
