@extends('todos.layout')

@section('content')

<div class="flex justify-center">
    <h1 class="text-2xl">Tus tareas pendientes</h1>
    <a href="/todos/create" class="mx-5 py-1 px-1 bg-green-300 cursor-pointer text-white rounded-lg">Crear nueva tarea</a>
</div>

<ul class="my-5">
    @foreach ($todos as $todo)
    <li class="flex justify-center py-2">
        <p>{{$todo->title}}</p>
        <a href={{"/todos/".$todo->id."/edit"}} class="mx-5 py-1 px-1 cursor-pointer bg-blue-300 rounded-lg border">Editar</a>
    </li>
    @endforeach
</ul>

@endsection