<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {

        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Imagen subida');
        }

        return redirect()->back()->with('error', 'Error al subir imágen');
    }

    public function index()
    {

        $data = [
            'name' => 'aodrigo',
            'email' => 'ro@test.mx',
            'password' => bcrypt('password'),
        ];

        User::create($data);

        return User::all();

        return view('home');
    }
}
