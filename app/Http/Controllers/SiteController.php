<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Gustavo Goularte Correia';
        $habits = ['ler,', 'correr', 'estudar'];
        return view('dashboard', compact('name', 'habits'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function login()
    {
        return view('login');
    }

    public function admin()
    {
        $users = User::all();
        return view('admin', compact('users'));
    }
}
