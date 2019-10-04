<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campanha;

class CampanhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        return redirect('/home');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
