<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Campanha;

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
        $categorias = Categoria::all();
        $campanhas = Campanha::orderBy('id', 'ASC')->get();
        return view('home')->with(['categorias' => $categorias, 'campanhas'=> $campanhas]);
    }
}
