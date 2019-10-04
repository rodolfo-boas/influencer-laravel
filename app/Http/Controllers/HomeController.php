<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Campanha;

class homeController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        $campanhas = Campanha::orderBy('id', 'ASC')->get();
        return view('home')->with(['categorias' => $categorias, 'campanhas'=> $campanhas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        return redirect('/home')->with('success', 'Campanha criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campanhaImagem = $request->input('campanhaImagem');

        $campanha = Campanha::find($id);

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
        } else {
            $caminhoRelativo = $campanhaImagem;
        }

        $campanha->titulo = $request->input('titulo');
        $campanha->descricao = $request->input('descricao');



        $campanha->imagem = $caminhoRelativo;

        $campanha->id_categoria = $request->input('categoria');

        $campanha->id_marca = $request->input('id_marca');
        $campanha->inicio = $request->input('inicio');
        $campanha->fim = $request->input('fim');


        $campanha->save();

        return redirect('/home')->with('success', 'Campanha alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campanha = Campanha::find($id);
        $campanha->delete();

        return redirect('/home')->with('success', 'Campanha excluida com sucesso!');

    }
}
