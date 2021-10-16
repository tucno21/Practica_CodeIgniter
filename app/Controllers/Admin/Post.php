<?php

namespace App\Controllers\Admin;

use App\Entities\PostEntity;
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

        $file = $this->request->getFile('cover');

        $post = new PostEntity($this->request->getPost());
        $post->slug = $this->request->getVar('title');
        $post->id_author = session()->user_id;
        //https://codeigniter.com/user_guide/libraries/files.html?highlight=get%20random
        $post->cover = $file->getRandomName();
        //https://codeigniter.com/user_guide/libraries/uploaded_files.html?highlight=store#store-files
        $file->store('cover/', $post->cover);

        dd($post);
    }
}
