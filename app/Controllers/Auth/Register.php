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
        $modelCountries = model('CountriesModel');
        $paises = $modelCountries->findAll();
        // d($paises);

        return view('Auth/register', [
            'paises' => $paises,
        ]);
    }

    public function store()
    {
        $modelCountries = model('CountriesModel');
        $validation = service('validation');

        $validation->setRules([
            'name' => 'required|alpha_space',
            'surname' => 'required|alpha_space',
            'email' => 'required|valid_email|is_unique[users.email]',
            'id_county' => 'required|is_not_unique[countries.id]',
            'password' => 'required|matches[confirm_password]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $validation->getErrors();

            return redirect()->back()->withInput()->with('validation',  $validation);
        } else {


            $user = new User($this->request->getPost());
            //llamando a la funcion creada en la entidad para generar el username

            $user->generateUsername();

            //instanciar el modelo
            $modelUser = model('UsersModel');
            //paso directo del grupo
            $modelUser->withGroup($this->configs->defaultGroup);
            // $modelUser->withGroup('admin');

            //====================================
            $userInfo = new UserInfo($this->request->getPost());
            $modelUser->addUserInfo($userInfo);

            $modelUser->save($user);
            // d($modelUser->withGroup($this->configs->defaultGroup));

            return redirect()->route('login');
        }
    }

    public function login()
    {
        return view('Auth/login');
    }
}
