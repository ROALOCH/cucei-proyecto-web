@extends('todos.layout')

@section('content')

<div class="flex justify-between border-b pb-4 px-10">
    <h1 class="text-2xl">Lista de Tareas</h1>
    <a href="/todos/create" class="mx-5 py-2 text-blue cursor-pointer text-blue-400"><span class="fa fa-plus-circle"></span></a>
</div>

<ul class="my-5">
    <x-alert />
    @foreach ($todos as $todo)
    <li class="flex justify-between py-2 px-10">
        <div>
            @include('todos.complete-button')
        </div>

        @if($todo->completed)
        <p class="line-through">{{$todo->title}}</p>
        @else
        <p>{{$todo->title}}</p>
        @endif
        <div>
            <span class="fa fa-trash text-red-500 px-2 cursor-pointer" onclick="event.preventDefault(); 
            if(confirm('¿Estas seguro de eliminar la tarea?')){
                document.getElementById('form-delete-{{$todo->id}}').submit()
            }" />
            <form id="{{'form-delete-'.$todo->id}}" style="display:none" action="{{route('todo.delete', $todo->id)}}" method="POST">
                @csrf
                @method('delete')
            </form>

        </div>
    </li>
    @endforeach
</ul>

@endsection