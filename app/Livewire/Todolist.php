<?php

namespace App\Livewire;

use App\Models\Note;
use App\Models\Notes;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Url;
use Livewire\Component;

class Todolist extends Component
{
    public Collection $notes;

    public  $note;

    #[Url]
    public $selected_item = [];

    //create
    public function addNote(){
        Note::create(['name' => $this->note]);

        $this->notes = Note::all();
    }

    //read
    public function mount(){
        $this->notes = Notes::all();
    }
    //update
    public function update($id, $val){
        Note::where('id', $id)->update(['isdone' => !$val]);
        $this->notes = Note::all();
    }

    //delete
    public function delete($id){
        Note::where('id', $id)->delete();
         $this->notes = Note::all();
    }
    public function render()
    {




        return view('livewire.todolist',['notes' => $this->notes]);
    }
}
