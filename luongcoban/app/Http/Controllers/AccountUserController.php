<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;


class AccountUserController extends UserController
{

    public function index()
    {
        return view('register');
    }

    public function create()
    {
        return view('register');
    }

}
