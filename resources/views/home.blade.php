@extends('layouts.master')
@extends('modais')

@section('content')

{{-- Inicio de validação de tipo de cliente --}}
@auth

@if(Auth::user()->tipo_cliente == 'influencer') {{-- Conteúdo da tela de trabalho do INFLUENCER --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard influencer</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Olá {{ Auth::user()->nome }}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Fim do INFLUENCER --}}

@elseif(Auth::user()->tipo_cliente == 'marca') {{-- Conteudo da tela de trabalho da MARCA --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard marca</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Olá {{ Auth::user()->nome }}
                </div>
            </div>
        </div>
    </div>
</div>
@endif
{{-- FIM DA MARCA --}}
@endauth
{{-- FIM DE VALIDAÇÃO --}}
@endsection