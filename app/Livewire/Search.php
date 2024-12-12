<?php

namespace App\Livewire;

use App\Models\Word;
use Livewire\Attributes\Url;
use Livewire\Component;

class Search extends Component
{
    // public $queryString = ['search'];

    #[Url]
    public $search = '';



    public function render()
    {
        $word = Word::all();
        if($this->search != ''){
        //  Word::where('word', 'like', "%$this->search%");
        $word= Word::query()->where('word','like','%'. $this->search .'%')->get();
        }

        return view('livewire.search',['allwords' => $word]);
    }
}
