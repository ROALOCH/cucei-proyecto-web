@extends('todos.layout')

@section('content')

<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl">Tus tareas pendientes</h1>
    <a href="/todos/create" class="mx-5 py-2 text-blue cursor-pointer text-blue-400"><span class="fa fa-plus-circle"></span></a>
</div>

<ul class="my-5">
    <x-alert />
    @foreach ($todos as $todo)
    <li class="flex justify-between py-2 px-10">
        @if($todo->completed)
        <p class="line-through">{{$todo->title}}</p>
        @else
        <p>{{$todo->title}}</p>
        @endif
        <div>

            <a href="{{'/todos/' .$todo->id. '/edit'}}" class="mx-5 py-1 px-1 cursor-pointer">
                <span class="fa fa-edit text-orange-400 px-2" />
            </a>
            @if($todo->completed)
            <span class="fa fa-check text-green-400 cursor-pointer px-2" onclick="event.preventDefault(); document.getElementById('form-incomplete-{{$todo->id}}').submit()" />
            <form id="{{'form-incomplete-'.$todo->id}}" style="display:none" action="{{route('todo.incomplete', $todo->id)}}" method="POST">
                @csrf
                @method('put')
            </form>
            @else
            <span onclick="event.preventDefault(); document.getElementById('form-complete-{{$todo->id}}').submit()" class="fa fa-check text-gray-300 cursor-pointer px-2" />
            <form id="{{'form-complete-'.$todo->id}}" style="display:none" action="{{route('todo.complete', $todo->id)}}" method="POST">
                @csrf
                @method('put')
            </form>
            @endif
        </div>
    </li>
    @endforeach
</ul>

@endsection