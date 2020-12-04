@extends('todos.layout')

@section('content')

<div class="flex justify-between border-b pb-4 px-10">
    <h1 class="text-2xl">Lista de Tareas</h1>
    <a href="{{route('todo.create')}}" class="mx-5 py-2 cursor-pointer text-green-400"><span class="fa fa-plus-circle"></span></a>
</div>

<ul class="my-5">
    <x-alert />

    @forelse ($todos as $todo)
    <li class="flex justify-between py-2 px-10">
        <div>
            @include('todos.complete-button')
        </div>

        @if($todo->completed)
        <a class="cursor-pointer line-through" href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a>
        @else
        <a class="cursor-pointer" href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a>
        @endif

        <div>

            <a href="{{route('todo.edit', $todo->id)}}" class="cursor-pointer text-blue-400"><span class="fa fa-pencil px-2"></span></a>

            <span class="fa fa-times text-red-500 px-2 cursor-pointer" onclick="event.preventDefault(); 
            if(confirm('¿Estas seguro de eliminar la tarea?')){
                document.getElementById('form-delete-{{$todo->id}}').submit()
            }" />
            <form id="{{'form-delete-'.$todo->id}}" style="display:none" action="{{route('todo.destroy', $todo->id)}}" method="POST">
                @csrf
                @method('delete')
            </form>

        </div>
    </li>
    @empty
    <p>No hay tareas que mostrar</p>
    @endforelse
</ul>

@endsection