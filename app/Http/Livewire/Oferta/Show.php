<?php

namespace App\Http\Livewire\Oferta;

use Livewire\Component;
use App\Models\Oferta;

class Show extends Component
{
    public $oferta;

    public function mount(Oferta $oferta){
        $this->oferta = $oferta;
    }


    public function render()
    {
        return view('livewire.oferta.show');
    }
}
