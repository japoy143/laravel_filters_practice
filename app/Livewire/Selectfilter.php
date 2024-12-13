<?php

namespace App\Livewire;

use App\Models\Word;
use Livewire\Attributes\Url;
use Livewire\Component;

class Selectfilter extends Component
{

    #[Url]
    public $selected_word = '';

    public function render()
    {

        $words = Word::all();

        if($this->selected_word == 'car'){
            $words = Word::query()->where('car',1)->get();
        }



        if($this->selected_word == 'airplane'){
            $words = Word::query()->where('airplane',1)->get();
        }




        if($this->selected_word == 'boat'){
            $words = Word::query()->where('boat',1)->get();
        }



        if($this->selected_word == 'animal'){
            $words = Word::query()->where('animal',1)->get();
        }


        return view('livewire.selectfilter', ['words'=>$words]);
    }
}
