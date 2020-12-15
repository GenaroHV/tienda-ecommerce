<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    public function store(Request $request){
        $portada = request()->file('portada')->store('img/servicio', 'public');

        $servicio = new Servicio;
        $servicio->titulo = $request->titulo;
        $servicio->portada = Storage::url($portada);
        $servicio->save();

        return redirect()->route('home')->with('success', 'Servicio creado con éxito');
    }

    public function destroy($id){
        $servicio = Servicio::findOrFail($id);
        $servicioPath = Str::replaceArray('storage', ['public'], $servicio->portada);
        Storage::delete($servicioPath);
        $servicio->delete();
        return redirect()->route('home');
    }
}
