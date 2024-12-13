<div>
<h1>{{json_encode($selected_item)}}</h1>
<input type="text" wire:model='note'>
<button wire:click="addNote">Save</button>

    @foreach ($notes as  $note)
        <div wire:key='{{$note->id}}'>

    <label for="{{$note->id}}">
{{$note->name}}



<input type="checkbox" name="" id="{{$note->id}}"  wire:change="update({{$note->id}},{{$note->isdone}})"  {{ $note->isdone ? 'checked' : '' }} >
<button wire:click = "delete({{$note->id}})">delete</button>


    </label>
        </div>
    @endforeach
</div>
