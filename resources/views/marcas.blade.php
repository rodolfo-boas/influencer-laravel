@extends('layouts.master')
@extends('modais')

@section('content')

<section class="servicos">
    <div class="text-center">
        <h1 class="p-3 titulo-landing-page">Encontre o micro influenciador para sua campanha!</h1>
    </div>

    <div class="container">

        <div>
            <div class="row align-items-center">
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid p-0 d-block imagem-services" alt="Faça o cadastro de sua marca"
                        title="anunciante1" src="image/anunciantes2.png" alt="">
                </div>
                <div class="col-md-8 servicos-texto">
                    <h2>Faça o cadastro de sua marca</h2>
                    <p class="m-0">Realize o cadastro de sua marca e conheça nossa plataforma de micro influencidores
                        que vão aumentar
                        o alcance e engajamento de sua coleção, conceito e estilo e o melhor de tudo para o público alvo
                        que você sempre
                        quis alcançar!
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-4 d-flex justify-content-center order-md-1">
                    <img class="img-fluid p-0 d-block imagem-services" alt="Comece sua campanha neste exato momento"
                        title="anunciante2" src="image/anunciantes1.png" alt="">
                </div>
                <div class="col-md-8 servicos-texto">
                    <h2>Comece sua campanha neste exato momento!</h2>
                    <p class="m-0">Com apenas alguns cliques realize sua campanha e receba notificações de todos os
                        micro influenciadores
                        que estão prontos para levar a sua marca para outro nível.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid p-0 d-block imagem-services" alt="Acompanhe os resultados na nossa plataforma"
                        title="anunciante3" src="image/anunciantes3.png" alt="">
                </div>
                <div class="col-md-8 servicos-texto">
                    <h2>Acompanhe os resultados na nossa plataforma</h2>
                    <p>Não fique apenas aguardando relatórios mensais e acompanhe os resultados real time em nossa
                        plataforma
                        e não perca nenhuma novidade com seus <strong>micro influenciadores</strong> preferidos.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection