<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        return view('Auth/register');
    }
}
