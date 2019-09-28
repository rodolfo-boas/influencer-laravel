@extends('layouts.master')
@extends('modais')

@section('content')

<h1>CRIANDO UMA CAMPANHA</h1>

{{-- <form method="POST" action="/criar/campanha" enctype="multipart/form-data">
    @csrf
    {{ method_field('POST') }}
    <div class="form-group col-md-6 col-sm-12">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" class="form-control" id="titulo">
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" class="form-control" id="descricao">
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="imagem">Imagem</label>
        <input type="file" name="imagem" class="form-control" id="imagem">
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="genero">Categoria</label>
        <select class="form-control" name="genero" id="genero">
            <option value="">Selecione uma categoria</option>
        </select>
    </div>

    <div class="form-group col-md-2 col-sm-12 flex-row">
        <label for="inicio">Data Inicial</label>
        <input type="date" name="inicio" class="form-control" id="inicio">
    </div>

    <div class="form-group col-md-2 col-sm-12 flex-row">
        <label for="fim">Data Final</label>
        <input type="date" name="fim" class="form-control" id="fim">
    </div>

    <div class="form-group col-md-2">
        <button type="submit" class="form-control btn btn-primary">Enviar</button>
    </div>
</form> --}}]


{{-- @if(Request::is('criar/campanhas')) --}}

    {{-- Inicio do Formulario --}}

        {{-- @endif --}}

@endsection