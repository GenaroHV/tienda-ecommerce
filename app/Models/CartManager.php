<?php

namespace App\Models;
use App\Models\Oferta;
use App\Models\ShoppingCart;

class CartManager {
    private $sessionName = "shopping_card_id";
    private $cart;

    public function __construct(){
        $this->cart = $this->findOrCreate($this->findSession());
    }

    public function addToCart($oferta_id){
        $oferta = $this->getOferta($oferta_id);
        $this->cart->ofertas()->attach($oferta->id);
    }

    public function getId(){
        return $this->findSession();
    }

    public function getAmount(){
        return $this->cart->ofertas()->sum('precio');
    }

    public function deleteSession(){
        return request()->session()->forget($this->sessionName);
    }

    public function removeOferta($pivotId){
        return $this->cart->ofertas()->wherePivot('id', $pivotId)->detach();
    }

    public function getCart(){
        return $this->cart;
    }

    private function findOrCreate($cart_id = null){
        $cart = null;
        if(is_null($cart_id))
            $cart = ShoppingCart::create();
        else {
            $cart = ShoppingCart::find($cart_id);
            if(is_null($cart))
                $cart = ShoppingCart::create();
        }
        request()->session()->put($this->sessionName, $cart->id);
        return $cart;
    }

    public function getOferta($slug){
        return Oferta::where('slug', $slug)->first();
    }

    private function findSession(){
        return request()->session()->get($this->sessionName);
    }
}
