<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public function count(){
        return $this->ofertas->count();
    }

    public function amount(){
        return $this->ofertas->count();
    }

    public function ofertas(){
        return $this->belongsToMany(Oferta::class)->withPivot('id');
    }
}
