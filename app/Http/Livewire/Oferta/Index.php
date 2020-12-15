<?php

namespace App\Http\Livewire\Oferta;

use Livewire\Component;
use App\Models\Oferta;
use App\Models\CartManager;

class Index extends Component
{
    public function addToCart(CartManager $cart, $oferta_id){
        $cart->addToCart($oferta_id);
        session()->flash('message', 'Oferta agregado al carrito de compras');
        $this->emitTo('cart', 'addToCart');
    }

    public function render()
    {
        return view('livewire.oferta.index', [
            'ofertas' => Oferta::all()
        ]);
    }
}
