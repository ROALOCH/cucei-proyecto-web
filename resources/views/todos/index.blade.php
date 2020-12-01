<div>Tareas</div>

<div>
    <ul>
        @foreach ($todos as $todo)
        <li>
            {{$todo->title}}
        </li>
        @endforeach
    </ul>
</div>