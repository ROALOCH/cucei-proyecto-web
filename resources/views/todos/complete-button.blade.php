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