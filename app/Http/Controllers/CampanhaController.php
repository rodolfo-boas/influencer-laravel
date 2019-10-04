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
            "fim" => "required",
            "id_marca" => "required"

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
            "imagem"=>$caminhoRelativo,
            "id_marca" => $request->input('id_marca')
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

    
    public function modificandoCampanha($id){
        $campanha = Campanha::find($id);

        $categorias = Categoria::orderBy('categoria', 'ASC')->get();

        return view('adicionandoCampanha')->with(
            ["campanha" => $campanha, "categoria" => $categorias]
        );
    }


    public function alterandoCampanha(Request $request, $id){
        $campanhaId = $request->input('campanhaId');
        $campanha = Campanha::find($campanhaId);


        $request->validate([
            "titulo" => "required|max:50",
            "descricao" => "required|max:200",
            "categoria" => "required",
            "inicio" => "required",
            "fim" => "required",
            "id_marca" => "required"
        ]);


        $arquivo = $request->file('imagem');
    
        if (!empty($arquivo)) {
            // salvando imagem no projeto
            $nomePasta = 'uploads';
    
            $arquivo->storePublicly($nomePasta);
    
            $caminhoAbsoluto = public_path()."/storage/$nomePasta";
    
            $nomeArquivo = $arquivo->getClientOriginalName();
    
            $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";
    
            // movendo imagem
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }
    
        $campanha->titulo = $request->input('titulo');
        $campanha->descricao = $request->input('descricao');
        $campanha->fim = $request->input('fim');
        if (!empty($arquivo)) {
            $campanha->imagem = $campanha->imagem;
        }
        $campanha->imagem = $caminhoRelativo;

        $campanha->id_categoria = $request->input('categoria');
        $campanha->inicio = $request->input('inicio');
    
        $campanha->id_marca = $request->input('id_marca');


    
        $campanha->save();
    
        return redirect('/home');
    }


        

    

    public function removendoCampanha($id){
        $campanha = Campanha::find($id);

        $campanha->delete();

        return redirect('/home');
    }
}

