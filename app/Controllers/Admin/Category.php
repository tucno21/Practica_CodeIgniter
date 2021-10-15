<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Category extends BaseController
{
    public function index()
    {
        $modelcategories = model('CategoriesModel');

        $categories = $modelcategories->findAll();

        return view('Admin/categorias/index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('Admin/categorias/create');
    }

    public function store()
    {
        if (!$this->validate([
            'name' => 'required|alpha_space|max_length[120]',
        ])) {
            $validation = $this->validator->getErrors();
            return redirect()->back()->withInput()->with('validation',  $validation);
        } else {
            //capturando y eliminando espacio
            $name = trim($this->request->getVar('name'));

            $modelcategories = model('CategoriesModel');

            $modelcategories->save([
                'name' => $name,
            ]);

            return redirect()->route('categorias');
        }
    }

    public function edit(string $id)
    {
        echo 'hola edit ' . $id;
    }
}
