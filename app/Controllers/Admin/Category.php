<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

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
        $modelcategories = model('CategoriesModel');
        $category = $modelcategories->where('id', $id)->first();

        if (!$modelcategories->find($id)) {
            throw PageNotFoundException::forPageNotFound();
        }
        // d($category);

        return view('Admin/categorias/edit', [
            'category' => $category,
        ]);
        // echo 'hola edit ' . $id;
    }

    public function update()
    {
        if (!$this->validate([
            'name' => 'required|alpha_space|max_length[120]',
            'id' => 'required|is_not_unique[categories.id]',
        ])) {
            $validation = $this->validator->getErrors();
            return redirect()->back()->withInput()->with('validation',  $validation);
        } else {
            //capturando y eliminando espacio
            $id = trim($this->request->getVar('id'));
            $name = trim($this->request->getVar('name'));
            // dd($id);
            $modelcategories = model('CategoriesModel');

            $modelcategories->save([
                'id' => $id,
                'name' => $name,
            ]);

            return redirect()->route('categorias');
        }
    }
}
