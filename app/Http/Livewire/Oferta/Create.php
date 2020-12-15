<?php

namespace App\Http\Livewire\Oferta;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Oferta;
use Illuminate\Support\Facades\Storage;

class Create extends Component
{
    use WithFileUploads;

    public $titulo, $descripcion, $precio, $portada;

    public function save(){
        $validate = $this->validate([
            'titulo' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'portada' => 'image|max:1024',
        ]);

        $filename = $this->portada->store('img/oferta', 'public');

        $oferta = Oferta::create([
            'titulo' => $this->titulo,
            'precio' => $this->precio,
            'descripcion' => $this->descripcion,
            'portada' => Storage::url($filename)
        ]);
        return redirect('/home');
    }
    public function render()
    {
        return view('livewire.oferta.create');
    }
}
