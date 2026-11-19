<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Single action controller untuk halaman utama.
     */
    public function __invoke(): View
    {
        return view('home');
    }
}
