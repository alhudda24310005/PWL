<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function show(string $id, string $name): View
    {
        return view('users.show', compact('id', 'name'));
    }
}
