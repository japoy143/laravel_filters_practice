<div>
    <h1>{{$selected_word}}</h1>
    <select name="" wire:model.live='selected_word' id="">
        <option value="car">car</option>
        <option value="boat">boat</option>
        <option value="animal">animal</option>
        <option value="airplane">airplane</option>

    </select>

    @foreach ($words as $word)
    <div wire:key='{{$word->id}}'>
        <p>{{$word->word}}</p>
    </div>

    @endforeach
</div>
