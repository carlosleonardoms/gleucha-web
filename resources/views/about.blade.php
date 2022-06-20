@extends('layouts.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-8/12 bg white p-6 rounded-lg">
            <!-- welcome section -->
            <section class="welcome_section layout_padding">
                <div class="container-fluid">
                <div class="row">
                    <div class=" col-md-6">
                    <div>
                        <img class="img-fluid" src="images/welcome.jpg" alt="" />
                    </div>
                    </div>
                    <div class=" col-md-6">
                    <div class="welcome_detail">
                        <h3>
                        Seja Bem vindo
                        </h3>
                        <h2>
                        Conheça um pouco da minha história
                        </h2>
                        <p>
                        Gleucha Maior é responsável pelos treinamentos e palestras do Instituto de Coaching Roberto Maior, empresa especializada em educação e inteligência emocional.
                        Através da metodologia de coaching de desempenho, alia seus 12 anos de experiência como Gestora de multinacionais e seu conhecimento acadêmico, para formar gestores de alta performance.
                        Além de realizar treinamentos também para suas equipes para elevarem suas performance.
                        Formada em Ciências Contábeis pela Universidade Federal Fluminense - RJ.
                        Especialista em Gestão pela Universidade Estácio de Sá - PE.
                        Mestre em Ciências Sociais Aplicadas pela Universidade Federal de Pernambuco .
                        Professora de Coaching para equipes no curso de Pós graduação na Faculdade Unifacol - PE.
                        Tem 2 mil horas em prática de sessões de coaching individuais e em grupo.
                        </p>
                        <div class="welcome_detail-btn">
                        <a href="">
                            <!-- <span>
                            Read More
                            </span>
                            <img src="images/arrow-black.png" alt="" class="ml-2" /> -->
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- end welcome section -->
        </div>
    </div>
@endsection