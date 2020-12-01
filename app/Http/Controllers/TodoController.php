<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request)
    {
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Tarea Creada');
    }

    public function edit()
    {
        return view('todos.edit');
    }
}
