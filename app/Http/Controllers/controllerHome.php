<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

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
