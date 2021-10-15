<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Category extends BaseController
{
    public function index()
    {
        return view('Admin/categorias/index');
    }

    public function create()
    {
        return view('Admin/categorias/create');
    }

    public function store()
    {
    }
}
