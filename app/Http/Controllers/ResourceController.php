<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\error;

class ResourceController extends Controller
{
    public function getImg(Request $request, $dir, $id)
    {
        if ($id == 'man') {
            $path = public_path('src/img/man.jpg');
            return response()->file($path);
        }

//        if($request->user()->id == $id){
        $path = storage_path('/app/public/images/' . $dir . '/' . $id . '.jpg');
        return response()->file($path);
//        }
    }
}
