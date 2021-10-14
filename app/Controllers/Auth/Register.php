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
        ];

        $user = new User($data);

        d($user);

        return view('Auth/register');
    }
}
