@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-10">
    <h1 class="text-2xl">Título: {{$todo->title}}</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 cursor-pointer text-gray-400"><span class="fa fa-arrow-left"></span></a>
</div>

<div>
    <div class="ml-10 mt-5">
        <h3 class="text-lg text-left">Descripción:</h3>
        <p class="text-lg text-left pb-3">{{$todo->description}}</p>
        <hr />
    </div>

    @if($todo->steps->count() > 0)
    <div class="ml-10 mt-3">
        <h3 class="text-lg text-left">Sub-tareas:</h3>
        @foreach($todo->steps as $step)
        <p class="text-left">{{$step->name}}</p>
        @endforeach
    </div>
    @endif

</div>

@endsection