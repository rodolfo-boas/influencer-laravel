@extends('layouts.master')
@extends('modais')

@section('content')

<section class="servicos">
    <div class="text-center">
        <h1 class="p-3 titulo-landing-page">Encontre as marcas que tem tudo a ver com o seu estilo</h1>
    </div>
    <div class="container">
        <div>
            <div class="row align-items-center">
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid p-0 d-block imagem-services"
                        alt="Faça o seu cadastro e conheça nossa plataforma" title="Influenciadora4"
                        src="image/anunciantes4.png" alt="">
                </div>
                <div class="col-md-8 servicos-texto">
                    <h2>Faça o seu cadastro e conheça nossa plataforma</h2>
                    <p class="m-0">Realize o cadastro em nossa plataforma e tenha todas as marcas do seu segmento
                        esperando
                        por você!
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-4 d-flex justify-content-center order-md-1">
                    <img class="img-fluid p-0 d-block imagem-services" alt="Entre nas campanhas do seu interesse"
                        title="Influenciadora5" src="image/anunciantes5.png" alt="">
                </div>
                <div class="col-md-8 servicos-texto">
                    <h2>Entre nas campanhas do seu interesse!</h2>
                    <p class="m-0">Receba todas as campanhas que estão acontecendo no momento e envie o seu intersse e
                        divulgue coleções,
                        campanhas e tudo que estiver em sua categoria.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid p-0 d-block imagem-services" alt="Acompanhe os resultados na nossa plataforma"
                        title="Influenciadora6" src="image/anunciantes6.png" alt="">
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