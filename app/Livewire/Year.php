<?php

namespace App\Livewire;

use App\Models\Year as ModelsYear;
use Livewire\Component;

class Year extends Component
{
    public $years;
    public function mount($id){

        $this->years = ModelsYear::where('course_id', $id)->get();
    }
    public function render()
    {
        return view('livewire.year',['years' => $this->years]);
    }
}
