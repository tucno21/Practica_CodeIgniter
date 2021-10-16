<?php

namespace App\Controllers\Admin;

use App\Entities\Post;
use App\Controllers\BaseController;
// use App\Entities\Post;

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
            'title' => 'required',
            'body' => 'required',
            'published_at' => 'required|valid_date',
            'categories.*' => 'permit_empty|is_not_unique[categories.id]',
            'cover' => 'uploaded[cover]|is_image[cover]',
        ])) {
            $validation = $this->validator->getErrors();
            return redirect()->back()->withInput()->with('validation',  $validation);
        }

        $post = new Post($this->request->getPost());
    }
}
