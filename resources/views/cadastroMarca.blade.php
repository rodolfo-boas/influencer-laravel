@extends('layouts.master')
@extends('modais')

@section('content')
<main class="bg-content">
    <section class="container-fluid">
        <div class="cadastro row justify-content-center">
            <div class="col-md-8">

                <div class="row">
                    <div class="col-10 offset-1 col-md-6 offset-md-3">
                        <div class="cadastro-info">
                            <h2 class="cadastro-info cadastro-title text-center">Bem vindo!</h2>
                            <h2 class="cadastro-info cadastro-title text-center">Ja registrou sua marca, Vamos realizar
                                seu cadastro?
                            </h2>
                            <h2 class="cadastro-info cadastro-title text-center">Dados pessoais</h2>
                            <p class="cadastro-info cadastro-obrigatorio text-center">Os campos marcados com * são de
                                preenchimento obrigatório</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="nome"type="text" class="form-control @error('nome') is-invalid @enderror"
                                    name="name" value="{{ old('nome') }}" required autocomplete="nome" autofocus
                                    placeholder="Qual o nome da sua empresa?">

                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('CNPJ') }}</label>

                            <div class="col-md-6">
                                <input id="cnpj"  maxlength="14" minlength="14" type="text" class="form-control @error('cnpj') is-invalid @enderror"
                                    name="cnpj" value="{{ old('cnpj') }}" required autocomplete="cnpj" autofocus
                                    placeholder="Informe o CNPJ da sua empresa?">

                                @error('cnpj')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="contato" maxlength="11" minlength="11" type="text"
                                    class="form-control @error('contato') is-invalid @enderror" name="contato"
                                    value="{{ old('contato') }}" required autocomplete="contato" autofocus
                                    placeholder="Informe um numero de contato da sua empresa?">

                                @error('contato')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Digite o email de contato da empresa">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password"
                                    placeholder="Digite uma senha com no minimo 8 digitos">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirmação de Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Digite a mesma senha para confirmação">
                            </div>
                        </div>

                        <input type="hidden" name="tipo_cliente" value ='marca'>

                        <div class="form-group">
                            <div class="cadastro-button d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
