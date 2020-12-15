<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Servicio;
use App\Models\Carousel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ofertas = Oferta::all();
        $servicios = Servicio::all();
        $carousels = Carousel::all();
        return view('home', compact('ofertas','servicios','carousels'));
    }
}
