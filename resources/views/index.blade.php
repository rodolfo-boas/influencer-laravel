@extends('layouts.master')
@extends('modalCadastro')

@section('content')

<section class="container-fluid">
    <article class="row align-items-center" id="bg-content">

        <div class="col-12 col-md text-white text-center" id="">
            <h1 class="main-title">Encontre o Influencer para o seu negócio</h1>
            <p class="main-text">Conecte sua marca com os <strong>micro influenciadores</strong> do seu nicho de mercado
                e alcance o seu público alvo</p>
            <div id="btn-content">

                <a class="btn btn-lg btn-marca" data-toggle="modal" data-target=".bd-cliente-modal-lg">
                    <h3>CADASTRE-SE</h3>
                </a>
                {{-- <a class="btn btn-lg btn-influencer" data-toggle="modal" data-target=".bd-influencer-modal-lg">
                    <h3>Influencer</h3>
                </a> --}}
            </div>
        </div>

        <div class="col-12 col-md d-flex justify-content-center">
            <img class="imagem-principal img-fluid d-block p-0" src="image/imageHome.png" alt="principal da home">
        </div>
    </article>
</section>

<section class="pt-3 pb-3 container-fluid text-center">
    <h3>MARCAS</h3>
    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active">
                <div class="col-3 col-md-3 float-left"><img alt="exception" title="exception"
                        class="img-fluid img-carrossel" src="image/logo1.jpg"></div>
                <div class="col-3 col-md-3 float-left"><img alt="dior" title="dior" class="img-fluid img-carrossel"
                        src="image/logo2.jpg"></div>
                <div class="col-3 col-md-3 float-left"><img alt="marisa" title="marisa" class="img-fluid img-carrossel"
                        src="image/logo3.png"></div>
                <div class="col-3 col-md-3 float-left"><img alt="monarch" title="monarch"
                        class="img-fluid img-carrossel" src="image/logo4.jpeg"></div>
            </div>
            <div class="carousel-item row no-gutters">
                <div class="col-3 col-md-3 float-left"><img alt="calvin klein" title="calvin klein"
                        class="img-fluid img-carrossel" src="image/logo5.png"></div>
                <div class="col-3 col-md-3 float-left"><img alt="oasis" title="oasis" class="img-fluid img-carrossel"
                        src="image/logo6.png"></div>
                <div class="col-3 col-md-3 float-left"><img alt="cartier" title="cartier"
                        class="img-fluid img-carrossel" src="image/logo7.png"></div>
                <div class="col-3 col-md-3 float-left"><img alt="fashion nova" title="fashion nova"
                        class="img-fluid img-carrossel" src="image/logo8.png"></div>
            </div>
        </div>
    </div>
</section>

<section class="servicos">
    <div class="container">
        <h3 class="text-center">O QUE FAZEMOS</h3>
        <div>
            <div class="row align-items-center">
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid p-0 d-block imagem-services" alt="Encontre os influenciadores para sua marca"
                        title="Influenciadora1" src="image/influencer9.png" alt="">
                </div>
                <div class="col-md-8 servicos-texto">
                    <h2>Encontre os influenciadores para sua marca</h2>
                    <p class="m-0">Na Reach Me Out você pode encontrar todos os <strong>influenciadores</strong> que
                        podem representar sua marca
                        e aumentar o alcance dos seus produtos para nichos específicos aumentando suas vendas e gerando
                        o buzz
                        desejado com seus objetivos</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-4 d-flex justify-content-center order-md-1">
                    <img class="img-fluid p-0 d-block imagem-services" alt="Personalize sua campanha"
                        title="Influenciadora2" src="image/influencer10.png" alt="">
                </div>
                <div class="col-md-8 servicos-texto">
                    <h2>Personalize sua campanha</h2>
                    <p class="m-0">Faça sua campanha sazonal, lançamento de novas coleções e muito mais valer a pena!
                        Personalize
                        sua campanha da forma que você quiser e de acordo com sues objetivos.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid p-0 d-block imagem-services" alt="Acompanhe os resultados na nossa plataforma"
                        title="Influenciadora3" src="image/influencer10.png" alt="">
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


<section class="container">
    <h3 class="titulo-galeria">GALERIA</h3>
    <div class="row text-center text-lg-left ">

        <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
            <div class="polaroid">
                <img alt="Juliana Ferrari Reach Me Out" title="Juliana Ferrari" src="image/influencer1.png"
                    class=" img-fluid rounded">
                <h3>Juliana Ferrari</h3>
                <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="image/insta.png" alt="">
                    <p>@Juliana_Ferrari</p>
                </div>
            </div>
        </figure>

        <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
            <div class="polaroid">
                <img alt="Barbara Ferreira Reach Me Out" title="Barbara Ferreira" src="image/influencer2.png"
                    class="img-fluid rounded" />
                <h3>Barbara Ferreira</h3>
                <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="image/insta.png" alt="">
                    <p>@Barbara_Ferreira</p>
                </div>
            </div>
        </figure>

        <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
            <div class="polaroid">
                <img alt="Paula Estevan Reach Me Out" title="Paula Estevan" src="image/influencer3.png"
                    class="img-fluid rounded" />
                <h3>Paula Estevan</h3>
                <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="image/insta.png" alt="">
                    <p>@Paula_Estevan</p>
                </div>
            </div>
        </figure>

        <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
            <div class="polaroid">
                <img alt="Pietra Stefani Reach Me Out" title="Pietra Stefani" src="image/influencer4.jpg"
                    class="img-fluid rounded" />
                <h3>Pietra Stefani</h3>
                <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="image/insta.png" alt="">
                    <p>@Pietra_Stefani</p>
                </div>
            </div>
        </figure>

        <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
            <div class="influencers-desktop polaroid">
                <img alt="Marcelo Silva Reach Me Out" title="Marcelo Silva" src="image/influencer5.png"
                    class="img-fluid rounded" />
                <h3>Marcelo Silva</h3>
                <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="image/insta.png" alt="">
                    <p>@Marcelo_Silva</p>
                </div>
            </div>
        </figure>

        <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
            <div class="influencers-desktop polaroid">
                <img alt="Ana Maggiori Reach Me Out" title="Ana Maggiori" src="image/influencer6.jpg"
                    class="img-fluid rounded" />
                <h3>Ana Maggiori</h3>
                <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="image/insta.png" alt="">
                    <p>@Ana_Maggiori</p>
                </div>
            </div>
        </figure>

        <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
            <div class="influencers-desktop polaroid">
                <img alt="Amanda Zanon Reach Me Out" title="Amanda Zanon" src="image/influencer7.jpg"
                    class="img-fluid rounded" />
                <h3>Amanda Zanon</h3>
                <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="image/insta.png" alt="">
                    <p>@Amanda_Zanon</p>
                </div>
            </div>
        </figure>

        <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
            <div class="influencers-desktop polaroid">
                <img alt="Aline Cury Reach Me Out" title="Aline Cury" src="image/influencer8.jpg"
                    class="img-fluid rounded" />
                <h3>Aline Cury</h3>
                <div class="d-flex flex-column align-items-center">
                    <img class="insta" src="image/insta.png" alt="">
                    <p>@Aline_Cury</p>
                </div>
            </div>
        </figure>
    </div>
</section>

<section class="numeros-content numeros text-white text-center">
    <h3 class="pb-3">NOSSA PLATAFORMA</h3>
    <div class="container-fluid">
        <div class="row">

            <article class="col-md-4 col-12 d-flex flex-column justify-content-center align-items-center">
                <p class="numerosoficiais">2000</p>
                <img class="icon-content" src="image/handshake.png" alt="">
                <p class="numeroslegendas">Clientes atendidos</p>
            </article>

            <article class="col-md-4 col-12 d-flex flex-column justify-content-center align-items-center">
                <p class="numerosoficiais">600</p>
                <img class="icon-content" src="image/famous.png" alt="">
                <p class="numeroslegendas">Influencers Cadastrados</p>
            </article>

            <article class="col-md-4 col-12 d-flex flex-column justify-content-center align-items-center">
                <p class="numerosoficiais">430</p>
                <img class="icon-content" src="image/building.png" alt="">
                <p class="numeroslegendas">Cidades Atendidas</p>
            </article>

        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="text-center">
        <h3 class="titulo-galeria">INSTAGRAM</h3>
        <div class="row pt-3">
            <img class="mb-4 col-lg-2 col-md-4 col-6" src="image/insta1.PNG" alt="">
            <img class="mb-4 col-lg-2 col-md-4 col-6" src="image/insta2.PNG" alt="">
            <img class="mb-4 col-lg-2 col-md-4 col-6" src="image/insta3.PNG" alt="">
            <img class="mb-4 col-lg-2 col-md-4 col-6" src="image/insta4.PNG" alt="">
            <img class="mb-4 col-lg-2 col-md-4 col-6" src="image/insta5.PNG" alt="">
            <img class="mb-4 col-lg-2 col-md-4 col-6" src="image/insta6.PNG" alt="">
            <div>
            </div>
</section>

<section class="container-fluid reviewContent pb-5 pt-3">
    <h3 class="text-center mb-3">Depoimentos</h3>
    <div class="container">
        <article class="row">
            <div class="col-12 col-md-4 text-center">
                <h4>Fulano</h4>
                <p class="font-italic text-justify">"Lorem ipsum dolor sit amet, consectetur adipisicing elit Delectus
                    aut
                    voluptate omnis? Cum, optio culpa! Et, neque? Consequatur Lorem, ipsum dolor sit amet consectetur
                    adipisicing
                    elit. Culpa, nam animi?."</p>
                <div class="col-12 reviewBorder"></div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <h4>Fulano</h4>
                <p class="font-italic text-justify ">"Lorem ipsum dolor sit amet, consectetur adipisicing elit Delectus
                    aut
                    voluptate omnis? Cum, optio culpa! Et, neque? Consequatur Lorem, ipsum dolor sit amet consectetur
                    adipisicing
                    elit. Culpa, nam animi?."</p>
                <div class="col-12 reviewBorder"></div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <h4>Fulano</h4>
                <p class="font-italic text-justify">"Lorem ipsum dolor sit amet, consectetur adipisicing elit Delectus
                    aut
                    voluptate omnis? Cum, optio culpa! Et, neque? Consequatur Lorem, ipsum dolor sit amet consectetur
                    adipisicing
                    elit. Culpa, nam animi?."</p>
                <div class="col-12 reviewBorder"></div>
            </div>
    </div>
    </article>
</section>

@endsection