<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Campanha;


class CampanhaController extends Controller
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

        $nomePasta = 'uploads';
        $arquivo->storePublicly($nomePasta);
        $caminhoAbsoluto = public_path(). "/storage/$nomePasta";
        $nomeArquivo = $arquivo->getClientOriginalName();
        $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";

        $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        $campanha = Campanha::create([
            "titulo" => $request->input('titulo'),
            "descricao" => $request->input('descricao'),
            "id_categoria" => $request->input('categoria'),
            "inicio" => $request->input('inicio'),
            "fim" => $request->input('fim'),
            "imagem"=>$caminhoRelativo
        ]);

        $campanha->save();

        return redirect('/home');

    }

    
    public function exibindoInfluencers () {
        $categorias = Categoria::orderBy('categoria', 'ASC')->get();

        return view('adicionandoCampanha')->with(['categorias' => $categorias]);
    }


    public function adicionandoCampanha () {
        $categorias = Categoria::orderBy('categoria', 'ASC')->get();

        return view('adicionandoCampanha')->with(['categorias' => $categorias]);
    }


}