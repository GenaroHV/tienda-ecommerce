<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'portada', 'precio', 'descripcion'
    ];

    protected static function booted(){
        static::creating(function($oferta){
            $slug = Str::slug($oferta->titulo, '-');
            $oferta->slug = Oferta::where('slug', $slug)->exists() ? ($slug . uniqid()) : $slug;
        });
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
