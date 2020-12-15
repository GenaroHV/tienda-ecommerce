<?php

namespace App\Http\Controllers;
use App\Models\Carousel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function store(Request $request){
        $this->validate(request(), [
            'slider' => 'required|image|max:2048'
        ]);
        $slider = request()->file('slider')->store('img/carousel', 'public');
        $carousel = new Carousel;
        $carousel->slider = Storage::url($slider);
        $carousel->save();
        return redirect()->route('home');
    }

    public function destroy(Carousel $carousel){
        $carousel->delete();
        $carouselPath = Str::replaceArray('storage', ['public'], $carousel->slider);
        Storage::delete($carouselPath);
        return back()->with('success', 'Foto eliminada');
    }
}
