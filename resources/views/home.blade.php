@extends('layouts.master')
@extends('modais')

@section('content')

{{-- Inicio de validação de tipo de cliente --}}
@auth

@if(Auth::user()->tipo_cliente == 'influencer') {{-- Conteúdo da tela de trabalho do INFLUENCER --}}

<div class="container-fluid">
    <h1 class="text-center">Influencers</h1>
    <div class="row">

        <div class="col-2 filtro-content">
            <p>Navegue por Filtro</p>
            @foreach ($categorias as $categoria)
            <a href="#">{{($categoria->categoria)}}</a>
            @endforeach
        </div>

        <section>
            @foreach ($campanhas as $campanha)
            <div class="card mb-3" style="max-width: 900px;">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img class="imagem" src="{{url($campanha->imagem)}}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <td scope="row">{{$campanha->titulo}}</td>
                            <p class="card-text">
                                <td scope="row">{{$campanha->descricao}}</td>
                            </p>
                            <div class="d-flex flex-column">
                                <div class="flex-column">
                                    <p>categoria: 
                                        <td scope="row">{{$campanha->categoria->categoria}}</td>
                                    </p>
                                </div>
                                <br>
                                <br>
                                <div class="flex-column mr-5">
                                    <p class="card-text"> Data inicial: 
                                        <td scope="row">{{date('d-m-Y', strtotime($campanha->inicio))}}</td>
                                    </p>
                                </div>
                                <div class="flex-column">
                                    <p class="card-text"> Data final:
                                        <td scope="row">{{date('d-m-Y', strtotime($campanha->fim))}}</td>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </section>

        </table>
        </article>
        </section>

    </div>
</div>

<!-- Modal Campanha -->
<div class="modal fade" id="modalCampanha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Minha Campanha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group d-flex flex-column">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Mensagem:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                    <label for="titulo">Início da Campanha</label>
                    <input type="date" name="titulo">
                </div>
                <div class="form-group">
                    <label for="titulo">Término da Campanha</label>
                    <input type="date" name="titulo">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Inserir Imagem</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>




<!-- Modal influencer -->

<div class="modal fade modalInfo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-influencer">
            <section class="d-flex flex-row align-items-center justify-content-center">
                <div class="col-6">
                    <img class="img-fluid" src="image/modelo1.jpg" alt="">
                </div>
                <div class="col-6">
                    <span>Nome: </span>
                    <hr>
                    <span>Seguidores: </span>
                    <hr>
                    <span>Categoria: </span>
                    <hr>
                    <span>Área de atuação: </span>
                    <hr>
                    <span>Estado: </span>
                    <hr>
                </div>
            </section>
        </div>
    </div>
</div>

</header>


{{------------------------------------------- Fim do INFLUENCER ----------------------------------}}



@elseif(Auth::user()->tipo_cliente == 'marca') {{-- Conteudo da tela de trabalho da MARCA --}}

<div class="container-fluid">
    <h1 class="text-center">Marca</h1>
    <div class="row">

        <div class="col-2 filtro-content">
            <p>Navegue por Filtro</p>

            <ul>Moda
                <li> <a href="">Trends</a> </li>
                <li> <a href="">Casual</a> </li>
                <li> <a href="">Street</a> </li>
            </ul>
            <ul>Saúde
                <li> <a href="">Alimentação</a> </li>
                <li> <a href="">Medicina</a> </li>
                <li> <a href="">Emagrecimento</a> </li>
            </ul>
            <ul>Lifestyle
                <li> <a href="">Cultura</a> </li>
                <li> <a href="">Artes</a> </li>
                <li> <a href="">Música</a> </li>
            </ul>
            <ul>Esporte
                <li> <a href="">Pilates</a> </li>
                <li> <a href="">Musculação</a> </li>
                <li> <a href="">Corredores</a> </li>
            </ul>
        </div>

        <div class="col-10">
            <figure class="col-lg-3 col-md-4 col-12 d-flex justify-content-center">
                <div class="produto-imagem text-center">
                    <div class="flip-container">
                        <div class="flipper">
                            <img class="img-fluid" src="image/campanha.jpg" alt="">
                            <div class="flip-card-back">
                                <div class="text-box">
                                    <h2>{{ Auth::user()->nome }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="name-content">{{ Auth::user()->nome }}</h2>
                    <button class="mb-5 button-content" type="button" data-toggle="modal" data-target=".modalInfo">Modal
                        Info</button>
                </div>
            </figure>
        </div>
    </div>
</div>

<!-- Modal marca -->


<div class=" modal fade modalInfo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-influencer">
            <section class="d-flex flex-row align-items-center justify-content-center">
                <div class="col-6">
                    <img class="img-fluid" src="image/campanha.jpg" alt="">
                </div>
                <div class="col-6">
                    <form method="POST" action="/campanha/adicionar" enctype="multipart/form-data">
                        @csrf
                        {{method_field('post')}}
                        <div class="form-group campanha-content">
                            <label for="titulo">Título da Campanha</label>
                            <input type="text" name="titulo" class="form-control" id="titulo">
                        </div>

                        <div class="form-group campanha-content">
                            <label for="descricao">descricao</label>
                            <input type="text" name="descricao" class="form-control" id="descricao">
                        </div>

                        <div class="form-group campanha-content">
                            <label for="imagem">Imagem</label>
                            <input type="file" name="imagem" class="form-control" id="imagem">
                        </div>

                        <div class="form-group campanha-content">
                            <label for="categoria">categoria</label>
                            <select name="categoria" class="form-control" id="categoria">
                                <option value="">Selecione a categoria</option>
                                @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex flex-column">
                            <div class="form-group campanha-content flex-row">
                                <label for="inicio"> Data de Inicio</label>
                                <input type="date" name="inicio" class="form-control col-10" id="inicio">
                            </div>

                            <div class="form-group campanha-content flex-row">
                                <label for="fim"> Data de fim</label>
                                <input type="date" name="fim" class="form-control col-10" id="fim">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
@endif
{{-- FIM DA MARCA --}}
@endauth
{{-- FIM DE VALIDAÇÃO --}}
@endsection