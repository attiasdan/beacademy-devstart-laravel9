<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nome' => 'José Lira',
            'nome' => 'Jão Lira'
        ];
        dd($users);
    }

    public function show($id)
    {
        dd('Id do usuario é ', $id);
    }
}
