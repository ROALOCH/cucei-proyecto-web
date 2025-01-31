@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-10">
    <h1 class="text-2xl pb-4">Editar Tarea</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 cursor-pointer text-gray-400"><span class="fa fa-arrow-left"></span></a>
</div>
<form action="{{route('todo.update', $todo->id)}}" method="POST" class="py-5">
    @csrf
    @method('patch')
    <div class="py-1">
        <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded-lg" placeholder="Título" />
    </div>
    <div class="py-1">
        <textarea name="description" class="p-2 rounded border" placeholder="Descripción">{{$todo->description}}</textarea>
    </div>
    <div class="py-2">
        @livewire('edit-step', ['steps' => $todo->steps])
    </div>
    <div class="py-1">
        <input type="submit" value="Enviar" class="p-2 border rounded-lg" />
    </div>


</form>
<x-alert />
@endsection