<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        dd($arguments);
        if (!session()->is_logged) {
            return redirect()->route('login');
        }

        $modelUser = model('UsersModel');
        $user = $modelUser->getUserBy('id', session()->user_id);

        if (!$user) {
            session()->destroy();
            return redirect()->route('login');
        }

        // dd($user);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
