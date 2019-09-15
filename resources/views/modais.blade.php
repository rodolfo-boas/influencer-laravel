@section('modais')


{{-- Modal de cadastro --}}
<div class="modal fade bd-cadastro-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-content">

            <div class="modal-header">
                <h5 class="modal-title text-center login" id="">Cadastre-se</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <section class="container-fluid h-100">
                <div class="row h-100 d-flex">

                    <div
                        class="sobre-borda col-10 offset-1 col-md-6 offset-md-0 d-flex flex-column justify-content-center order-1 order-md-0">
                        <div class="borda h-75 d-flex flex-column justify-content-center ">
                            <div class="cadastro">
                                <h4 class="text-center">Cadastro Marca</h4>
                                <p class="text-center">Se não possui conta, clique no botão abaixo</p>
                                <div class="cadastro-button d-flex justify-content-center">
                                    <a class="btn btn-lg btn-influencer" href="cadastrocliente">quero me cadastrar</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- fim Col Cadastro -->

                    <div
                        class="sobre-borda col-10 offset-1 col-md-6 offset-md-0 d-flex flex-column justify-content-center order-1 order-md-0">
                        <div class="h-75 d-flex flex-column justify-content-center ">
                            <div class="cadastro">
                                <h4 class="text-center">Cadastro influencer</h4>
                                <p class="text-center">Se não possui conta, clique no botão abaixo</p>
                                <div class="cadastro-button d-flex justify-content-center">
                                    <a class="btn btn-lg btn-influencer" href="cadastrocliente">quero me cadastrar</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- fim Col Cadastro -->


                </div> <!-- fim ROW -->
            </section>

        </div>
    </div>
</div>
{{-- Modal de Incluencer
<div class="modal fade bd-influencer-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-content">

            <section class="container-fluid h-100">
                <div class="row h-100 d-flex">

                    <div
                        class="sobre-borda col-10 offset-1 col-md-6 offset-md-0 d-flex flex-column justify-content-center order-1 order-md-0">
                        <div class="borda h-75 d-flex flex-column justify-content-center ">
                            <div class="cadastro">
                                <h4 class="text-center">Ainda não sou Influencer</h4>
                                <p class="text-center">Se não possui conta, clique no botão abaixo</p>
                                <div class="cadastro-button d-flex justify-content-center">
                                    <a class="btn btn-lg btn-influencer" href="cadastroInfluencer.php">quero me
                                        cadastrar</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- fim Col Cadastro -->

                    <div
                        class="col-10 offset-1 col-md-6 offset-md-0 d-flex flex-column justify-content-center order-0 order-md-0">
                        <div class="login">
                            <h4 class="text-center">Sou Influencer</h4>
                            <p class="text-center">Se você já possui conta conosco, entre com seu usuário e senha
                                abaixo:</p>
                            <form action="" class="" method="post">
                                <div class="form-group">
                                    <input class="form-control" name="" type="email" id="email-login"
                                        placeholder="Digite seu e-mail" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="" type="password" id="senha"
                                        placeholder="Digite sua senha" required>
                                </div>
                            </form>
                            <div class="login-button d-flex justify-content-center">
                                <button type="submit" name="botao">Entrar</button>
                            </div>
                        </div>
                    </div> <!-- fim Col Login -->

                </div> <!-- fim ROW -->
            </section>

        </div>
    </div>
</div> --}}


{{-- Modal de login --}}
<div class="modal fade bd-login-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content bg-content">

            <div class="modal-header">
                <h5 class="modal-title text-center login" id="">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <section class="container-fluid h-100">
                <div class="row h-100 d-flex">

                    <div
                        class="col-10 offset-1 col-md-12 offset-md-0 d-flex flex-column justify-content-center order-0 order-md-0">
                        <div class="login2">
                            <p class="text-center">Se você já possui conta conosco, entre com seu usuário e senha
                                abaixo:</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="Digite seu e-mail" required
                                            autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Senha') }} </label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Digite sua senha" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Lembrar-me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn-marca">
                                            {{ __('Entrar') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu a senha?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- fim Col Login -->

                </div> <!-- fim ROW -->
            </section>

        </div>
    </div>
</div>
@endsection