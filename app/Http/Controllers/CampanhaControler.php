<?php

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Campanha;


class CapanhaControler extends Controller
{
    public function salvandoCampanha(Request $request){
        $request->validate([
            "titulo" => "required|max:50",
            "descricao" => "required|max:200",
            "categoria" => "required",
            "inicio" => "required",
            "fim" => "required"
        ]);

        $arquivo = $request->file('imagem');

        if (empty($arquivo)) {
            abort(400, 'Nenhum arquivo foi enviado');
        }

    }

    public function adicionandoCampanha () {
        $categorias = Categoria::orderBy('categoria', 'ASC')->get();

        return view('adicionandoCampanha')->with(['categorias' => $categorias]);
    }
}