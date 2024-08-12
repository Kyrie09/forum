<?php

namespace App\Livewire;

use App\Models\Block as ModelsBlock;
use Livewire\Component;

class Block extends Component
{
    public $blocks;
    public $id;
    public function mount($id){
        $this->blocks = ModelsBlock::where('id', $id)->get();
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.block',['blocks' => $this->blocks]);
    }
}
