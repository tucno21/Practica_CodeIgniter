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
        $postModel = model('PostModel');
        $posts = $postModel->paginate(2);
        $pager = $postModel->pager;

        return view('front/home/index', [
            'posts' => $posts,
            'pager' => $pager,

        ]);
    }

    public function libreria()
    {
        echo 'desde otro controlador y rura';
    }
}
