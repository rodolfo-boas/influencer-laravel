@extends('layouts.master')
@extends('modais')

@section('content')
<main class="bg-content">
    <section class="container-fluid">
        <div class="cadastro row justify-content-center">
            <div class="col-md-8">

                <div class="row">
                    <div class="col-12 offset-1 col-md-12">
                        <div class="cadastro-info ">
                            <h2 class="cadastro-info primeira-frase cadastro-title text-center">Fala Sério, você ainda não é cadastrado?</h2>
                            <h2 class="cadastro-info cadastro-title text-center">Ta esperando o que? Corre pra preencher esses dados!</h2>
                            {{-- <h2 class="cadastro-info cadastro-title text-center">Dados pessoais</h2> --}}
                            <p class="cadastro-info cadastro-obrigatorio text-center">Só não esquece: os campos marcados com * são de
                                preenchimento obrigatório</p>
                        </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror"
                                    name="name" value="{{ old('nome') }}" required autocomplete="nome" autofocus
                                    placeholder="Vamos começar com o basico, qual o seu nome ?">

                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sobrenome" class="col-md-4 col-form-label text-md-right">{{ __('Sobrenome') }}</label>

                            <div class="col-md-6">
                                <input id="sobrenome" type="text" class="form-control @error('sobrenome') is-invalid @enderror"
                                    name="sobrenome" value="{{ old('sobrenome') }}" required autocomplete="sobrenome" autofocus
                                    placeholder="Mas fala aí, qual seu sobrenome ?">

                                @error('sobrenome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror"
                                    name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus
                                    placeholder="qual seu CPF? mera formalidade JURO!" minlength="11" maxlength="11">

                                @error('cpf')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="contato" type="text"
                                    class="form-control @error('contato') is-invalid @enderror" name="contato"
                                    value="{{ old('contato') }}" required autocomplete="contato" autofocus
                                    placeholder="Que tal me passar seu contato?" minlength="11" maxlength="11">

                                @error('contato')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror"
                                    name="url" value="{{ old('url') }}" required autocomplete="url"
                                    placeholder="Cola aqui seu link no Insta!">

                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="seguidores" class="col-md-4 col-form-label text-md-right">{{ __('Seguidores') }}</label>

                            <div class="col-md-6">
                                <input id="seguidores" type="text" class="form-control @error('seguidores') is-invalid @enderror"
                                    name="seguidores" value="{{ old('seguidores') }}" required autocomplete="seguidores"
                                    placeholder="A pergunta que não quer calar, quantos são?">

                                @error('seguidores')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Quase no fim, digite o seu email de contato ?">

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
                                    placeholder="Capricha na senha com (minimo 8 digitos)">

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
                                    placeholder="So para ter certeza, shshsh.">
                            </div>
                        </div>

                        <input type="hidden" name="tipo_cliente" value ='influencer'>

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
