@extends('layouts.master')
    @section('content')

        <main class="bg-content">
            <section class="container-fluid">
                <div class="cadastro">

                    <div class="row">
                        <div class="col-10 offset-1 col-md-6 offset-md-3">
                            <div class="cadastro-info">   
                                <h2 class="cadastro-info cadastro-title text-center">Bem vindo Cliente!</h2>
                                <h2 class="cadastro-info cadastro-title text-center">Vamos realizar seu cadastro?
                                </h2>
                                <h2 class="cadastro-info cadastro-title text-center">Dados pessoais</h2>
                                <p class="cadastro-info cadastro-obrigatorio text-center">Os campos marcados com * são de preenchimento obrigatório</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-10 offset-1 col-md-4 offset-md-2">
                            <form action="" class="" method="post" >
                                <div class="form-group">
                                    <input class="form-control" name="" type="text" id="cadastro-nome" placeholder="Qual o seu nome?*" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="" type="text"  id="cadastro-celular" placeholder="Seu celular?*" required>
                                </div> 
                                <div class="form-group">
                                    <select class="form-control" name="" id="cadastro-genero">
                                        <option hidden="" value="">Seu gênero?*</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                        <option value="O">Outro</option>
                                    </select>
                                </div> 
                                <!-- <div class="form-group">
                                    <input class="form-control" name="" type="text"  id="cadastro-cep" placeholder="Seu CEP?*" required>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" name="" type="text"  id="cadastro-endereco" placeholder="Endereço (Rua, avenida, etc.)*" required>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" name="" type="text"  id="cadastro-complemento" placeholder="Complemento" required>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" name="" type="text"  id="cadastro-UF" placeholder="UF*" required>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" name="" type="password"  id="cadastro-senha" placeholder="Escolha uma senha*" required>
                                </div>  -->
                            </form>
                        </div> 

                        <div class="col-10 offset-1 col-md-4 offset-md-0">
                            <form action="" class="" method="post" >
                                <div class="form-group">
                                    <input class="form-control" name="" type="email"  id="cadastro-email" placeholder="Qual o seu e-mail?*" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="" type="email"  id="cadastro-CPF" placeholder="Seu CPF?*" required>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" name="" type="email"  id="cadastro-nasc" placeholder="Data nascimento*" required>
                                </div> 
                                <!-- <div class="form-group">
                                    <div style="padding: 5px"> 
                                        <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCepEndereco.cfm" target="_blank" rel="noopener noreferrer">Não sei meu CEP</a>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" name="" type="email"  id="cadastro-nroCasa" placeholder="Número*" required>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" name="" type="email"  id="cadastro-bairro" placeholder="Bairro*" required>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" name="" type="email"  id="cadastro-cidade" placeholder="Cidade*" required>
                                </div> 
                                <div class="form-group">
                                    <input class="form-control" name="" type="password"  id="cadastro-confSenha" placeholder="Confirme sua senha*" required>
                                </div>  -->
                            </form>
                        </div> 

                    </div>

                    <div class="cadastro-button d-flex justify-content-center"> 
                        <button type="submit" name="botao">Cadastrar</button>
                    </div> 

                </div>    
            </section>
        </main>        

    @endsection