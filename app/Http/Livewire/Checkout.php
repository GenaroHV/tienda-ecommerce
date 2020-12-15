<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CartManager;
use App\Models\Oferta;

class Checkout extends Component
{
    public $cart;

    public function mount(CartManager $cart){
        $this->cart = $cart->getCart();
    }

    public function deleteOferta(CartManager $cart, $pivotId){
        $cart->removeOferta($pivotId);
        $this->emitTo('cart','addToCart');
        session()->flash('message', 'Oferta removida');
    }

    public function hydrate(){
        $this->cart = (app(CartManager::class))->getCart();
    }

    public function render()
    {
        return view('livewire.checkout', [
            'ofertas' => $this->cart->ofertas
        ]);
    }
}
