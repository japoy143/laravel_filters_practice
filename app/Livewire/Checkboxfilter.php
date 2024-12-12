<?php

namespace App\Livewire;

use App\Models\Word;
use Livewire\Attributes\Url;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class Checkboxfilter extends Component
{
    #[Url]
    public $selected_item=[];



    public function render()
    {
        $words = Word::all();

        if (!empty($this->selected_item)) {

            if(in_array('car', $this->selected_item)){
                $words = Word::where('car', 1)->get();
            }


             if(in_array('animal', $this->selected_item)){
                $words = Word::where('animal', 1)->get();
            }

             if(in_array('airplane', $this->selected_item)){
                $words = Word::where('airplane', 1)->get();
            }

             if(in_array('boat', $this->selected_item)){
                $words = Word::where('boat', 1)->get();
            }

        }





        return view('livewire.checkboxfilter', [
            'words' => $words
        ]);
    }
}
