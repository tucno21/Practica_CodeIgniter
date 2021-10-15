<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Post extends BaseController
{
    public function index()
    {
        return view('Admin/posts/index');
    }

    public function create()
    {
        $modelcategories = model('CategoriesModel');

        $categories = $modelcategories->findAll();

        return view('Admin/posts/create', [
            'categories' => $categories,
        ]);
    }

    public function store()
    {
        // dd($this->request->getFiles());
        // dd($this->request->getPost());

        if (!$this->validate([
            'title' => 'required|alpha_space',
            'body' => 'required|alpha_space',
        ])) {
            $validation = $this->validator->getErrors();
            return redirect()->back()->withInput()->with('validation',  $validation);
        }
    }
}
