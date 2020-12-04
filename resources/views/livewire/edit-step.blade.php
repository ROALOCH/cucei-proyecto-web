<div>
    <div class="flex justify-center pb-4 px-10">
        <h2 class="text-lg pb-4">Pasos de Tarea</h2>
        <span wire:click='increment' class="fa fa-plus px-4 py-1 cursor-pointer"></span>
    </div>
    @foreach($steps as $step) <div class='flex justify-center py-2' wire:key='{{$loop->index}}'>

        @if(isset($step['name']))
        <input type="text" name="stepName[]" placeholder="{{'Index '.($loop->index)}}" class="py-1 px-2 border rounded-lg" value="{{$step['name']}}" />

        <input type="hidden" name="stepId[]" value="{{$step['id']}}" />
        @else
        <input type="text" name="stepName[]" placeholder="{{'Index '.($loop->index)}}" class="py-1 px-2 border rounded-lg" />

        <input type="hidden" name="stepId[]" />
        @endif

        <span wire:click='remove({{$loop->index}})' class='fa fa-times text-red-400 p-2 cursor-pointer' />
    </div>
    @endforeach
</div>