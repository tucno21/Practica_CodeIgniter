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
        $posts = $postModel->PostInfoUser()->orderBy('published_at', 'desc')->paginate(2);
        // $posts = $postModel->PostInfoUser()->paginate(2);
        $pager = $postModel->pager;
        // dd($posts);
        //https://codeigniter.com/user_guide/helpers/text_helper.html
        helper('text');
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
