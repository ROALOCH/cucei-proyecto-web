@extends('todos.layout')

@section('content')

<h1 class="text-2xl border-b pb-4">Nueva Tarea</h1>
<form action="/todos/create" method="POST" class="py-5">
    @csrf
    <input type="text" name="title" placeholder="¿Qué tienes por hacer?" class="py-2 px-2 border rounded-lg" />
    <input type="submit" value="Enviar" class="p-2 border rounded-lg" />
</form>
<x-alert />

<a href="/todos" class="mx-5 py-1 px-1 bg-white-400 cursor-pointer text-black border">Ver Tareas</a>

@endsection