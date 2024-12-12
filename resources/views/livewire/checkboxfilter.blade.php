<div>
    <p>Selected: {{ json_encode($selected_item) }}</p>
    @foreach(['animal', 'boat', 'car', 'airplane'] as $key => $option)
        <div wire:key="{{$key}}">
            <label for="{{$key}}">
                <input
                    wire:model.live="selected_item"
                    type="checkbox"
                    value="{{ $option }}"

                    id="{{$key}}"
                >
                {{$option}}
            </label>
        </div>
    @endforeach


    @foreach ($words as $key=>$word )

    <div wire:key="{{$key}}">
        <div>
            <p>key:<span>{{$key}}</span></p>
        </div>
        <p>{{$word->word}}</p>
    </div>

    @endforeach
</div>
