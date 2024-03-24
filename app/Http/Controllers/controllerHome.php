<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerHome extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('pages.login');
    }
    
    public function register()
    {
        return view('pages.register');
    }

    public function home(){
        return view('pages.home');
    }
}