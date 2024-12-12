<div>
   <h1>{{$search}}</h1>

   <input type="text" wire:model.live='search'>

  @foreach ($allwords as  $item)
  <p>{{$item->word}}</p>

  @endforeach
</div>
