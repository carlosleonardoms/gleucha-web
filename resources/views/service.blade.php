@extends('layouts.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-8/12 bg white p-6 rounded-lg">
            <!-- service section -->
            <section class="service_section layout_padding-top">
                <div class="container">
                <div class="service_detail">
                    <h3>
                    Ajudamos Empresas, Pessoas, Você!
                    </h3>
                    <h2>
                    Nós oferecemos os serviços:
                    </h2>
                </div>
                <div class="service_img-container">
                    <div class="service_img-box i-box-1">
                    <a href="https://www.hotmart.com/product/autoestima-de-aguia-como-elevar-sua-autoestima-nas-alturas/S36564939R"> Curso Hotmart</a>
                    </div>
                    <div class="service_img-box i-box-2">
                    <a href="{{ route('contact') }}">Cursos de imerção </a>
                    </div>
                    <div class="service_img-box i-box-3">
                    <a href="{{ route('contact') }}">Sessões individuais e em grupo</a>
                    </div>
                    <div class="service_img-box i-box-4">
                    <a href="{{ route('contact') }}"> Palestras</a>
                    </div>
                </div>
                <div class="service_btn">
                    <a href="{{ route('contact') }}">
                    <span>
                        
                    </span>
                    <img src="images/arrow-black.png" alt="" class="ml-2" />
                    </a>
                </div>
                </div>
                <ul class="services_grid">
                    <li class="service_grid">
                        <h2 style="text-align: center;">
                            Curso Hotmart
                        </h2>
                        <p>
                        Esse curso é um grande presente para quem quer se desenvolver mas está com baixa disponibilidade financeira. 
                        Visa sanar as dores causadas pela baixa autoestima, contando com ferramentas de coaching, estudos de programação nerolinguísticas e psicologia positiva. O cliente terá um passo a passo, com a facilidade de um devocional de 30 minutos de dedicação diária para mudar seus comportamentos, seus pensamentos e sentimentos, a fim de se transformar em sua melhor versão.
                        </p>
                    </li>
                    <li class="service_grid">
                        <h2 style="text-align: center;">
                            Cursos de imerção
                        </h2>
                        <p>
                        São cursos e eventos de curta duração, com práticas de coaching, porém com uma alta carga de conteúdo. Nesse sentido, uma Imersão em um idioma curso de inteligência emocional, é uma solução para quem busca um desenvolvimento rápido de suas habilidades e capacidades em diversas áreas de suas vidas. Ou seja, um trampolim para quem busca dar um salto no desenvolvimento humano.
Imersões buscam focar no conteúdo prático e o objetivo geralmente é colocar a “mão na massa”: misturando teórico e empírico, e proporcionando uma vivência no assunto da Imersão. Quando falamos do life coaching, por exemplo, diferente de sessões individuais - a pessoa é exposta aos poucos ao conteúdo, tendo em média um contato de 2 horas por semana com as ferramentas -, na Imersão, o coachee fica entre 10 e 18 horas do seu dia rodeado pelo conteúdo.
Ao final da Imersão, os resultados obtidos são visíveis: o participante passa a ter mais clareza sobre seus objetivos, aumenta sua capacidade de identificar seu estado atual e o estado desejado, desenvolve suas habilidades para ampliar a consciência, além de melhorar - E MUITO - sua capacidade de tomar decisões.
Algumas pessoas chamam Imersões de “Cursos de Imersão”, dando a ideia de que são cursos rápidos e densos em conteúdo, outros, somente de “Imersão”. Seja qual for a forma que você chame, o conceito de imersão está se tornando cada vez mais popular e é uma ótima opção para aquelas pessoas que buscam resultados eficazes e à curto prazo.
                        </p>
                    </li>
                    <li class="service_grid">
                        <h2 style="text-align: center;">
                            Sessões individuais e em grupo
                        </h2>
                        <p>
                        O processo de Coaching é uma oportunidade de visualização clara dos pontos individuais, de aumento da autoconfiança, de quebrar crenças limitantes, para que as pessoas possam conhecer e atingir seu potencial máximo e alcançar suas metas de forma objetiva e, principalmente, assertiva.

Conduzido de maneira confidencial, o processo de Coaching é realizado através de sessões, onde um profissional chamado Coach tem a função de estimular, apoiar e despertar em seu cliente, Coachee, o seu potencial infinito para que este conquiste tudo o que deseja. As sessões de Coaching, individuais ou em grupo, podem ser realizadas semanalmente, quinzenalmente ou mensalmente e tem duração, em média, de uma a duas horas, tudo isso definido em comum acordo entre Coach e Coachee. Por ser um processo completamente flexível, o Coaching pode ser aplicado em qualquer contexto e direcionado a pessoas, profissionais das mais diversas profissões e empresas de diferentes portes e segmentos
                        </p>
                    </li>
                    <li class="service_grid">
                        <h2 style="text-align: center;">
                            Palestras
                        </h2>
                        <p>
                        O Coaching é um processo definido como um mix de recursos que utiliza técnicas, ferramentas e conhecimentos de diversas ciências como a administração, gestão de pessoas, psicologia, neurociência, linguagem ericksoniana, recursos humanos, planejamento estratégico, entre outras. A metodologia visa a conquista de grandes e efetivos resultados em qualquer contexto, seja pessoal, profissional, social, familiar, espiritual ou financeiro. Desenvolvemos palestras alicerçadas em nosso propósito de conectar e transformas pessoas através de experiencias especiais.
                        </p>
                    </li>
                </ul>
            </section>
            <!-- end service section -->

            <!-- security section -->

            <section class="security_section layout_padding">
                <h3>
                Depoimentos
                </h3>
                <h2>
                O que os clientes tem falado?
                </h2>
                <div class="security_container">
                <div class="carousel-wrap">
                    <div class="owl-carousel">
                    <div class="item">
                        <div class="security_img-box i-box-1">
                        <a href=""> View More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="security_img-box i-box-2">
                        <a href=""> View More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="security_img-box i-box-3">
                        <a href=""> View More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="security_img-box i-box-4">
                        <a href="{{ route('service') }}"> View More</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="security_btn">
                <a href="">
                    <span>
                    
                    </span>
                    <img src="images/arrow-black.png" alt="" class="ml-2" />
                </a>
                </div>
            </section>
            <!-- end security section -->

        </div>
    </div>
@endsection