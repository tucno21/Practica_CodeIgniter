<?php

namespace App\Controllers\Front;

use App\Libraries\Codigo;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        // $instanciar = new Codigo();

        // echo $instanciar->hola();

        return view('front/home');
    }

    public function libreria()
    {
        echo 'desde otro controlador y rura';
    }
}
