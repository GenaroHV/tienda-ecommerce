<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class OfertaController extends Controller
{
    public function store(Request $request){
        $portada = request()->file('portada')->store('img/oferta', 'public');

        $oferta = new Oferta;
        $oferta->titulo = $request->titulo;
        $oferta->portada = Storage::url($portada);
        $oferta->precio = $request->precio;
        $oferta->save();

        return redirect()->route('home')->with('success', 'Oferta creado con éxito');
    }

    public function destroy($id){
        $oferta = Oferta::findOrFail($id);
        $ofertaPath = Str::replaceArray('storage', ['public'], $oferta->portada);
        Storage::delete($ofertaPath);
        $oferta->delete();
        return redirect()->route('home');
    }
}
