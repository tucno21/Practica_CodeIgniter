<?php

namespace App\Controllers;

use App\Libraries\Codigo;

class Home extends BaseController
{
    public function index()
    {
        $instanciar = new Codigo();

        echo $instanciar->hola();

        return view('welcome_message');
    }

    public function libreria()
    {
        echo 'desde otro controlador y rura';
    }
}
