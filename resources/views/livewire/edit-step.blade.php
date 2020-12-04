<div>
    <div class="flex justify-center pb-4 px-10">
        <h2 class="text-lg pb-4">Pasos de Tarea</h2>
        <span wire:click='increment' class="fa fa-plus px-4 py-1 cursor-pointer"></span>
    </div>
    @foreach($steps as $step) <div class='flex justify-center py-2' wire:key='{{$loop->index}}'>
        <input type="text" name="step[]" placeholder="{{'Sub-tarea '.($loop->index+1)}}" class="py-1 px-2 border rounded-lg" value="{{$step['name']}}" />
        <span wire:click='remove({{$loop->index}})' class='fa fa-times text-red-400 p-2 cursor-pointer' />
    </div>
    @endforeach
</div>