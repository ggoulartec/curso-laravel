<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Gustavo';
        $habits = ['ler,', 'correr', 'estudar'];
        return view('index', [
            'name' => $name,
            'habits' => $habits,
        ]);
    }
}
