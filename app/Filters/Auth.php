<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\Exceptions\PageNotFoundException;

class Auth implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        // dd($arguments); //es un array
        if (!session()->is_logged) {
            return redirect()->route('login');
        }

        $modelUser = model('UsersModel');
        $user = $modelUser->getUserBy('id', session()->user_id);

        if (!$user) {
            session()->destroy();
            return redirect()->route('login');
        }

        $modelGroups = model('GroupsModel');
        $group = $modelGroups->where('id', $user->id_group)->first();

        //buscar dentro del array coincidencias
        if (!in_array($group->name, $arguments)) {
            throw PageNotFoundException::forPageNotFound();
            // return redirect()->route('login');
        }
        // dd($group->name);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
