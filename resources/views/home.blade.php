@extends('layouts.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-8/12 bg white p-6 rounded-lg">
        <section class=" slider_section">
    <div id="carouselExampleIndicators" class="carousel slide vert" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <!--  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="slider_box">
            <div class="slider-detail">
              <div class="slider_detail-heading">
                <h2>
                  Nós te mostramos
                </h2>
                <h1>
                  o caminho 
                </h1>
              </div>
              <div class="slider_detail-text">
                <p>
                  Já se viu ampliando seu conhecimento sobre Autoestima e Inteligência Emocional,
                   se abrindo para aprender o que a Autoestima de Águia tem para te ensinar? 
                   Pois aqui você vai perceber em poucos dias, os ganhos que terá com esse conhecimento.
                </p>
              </div>
              <div class="slider_detail-btn">
                <a href="{{ route('service') }}">
                  <span>
                    Saiba Mais
                  </span>
                  <img src="images/arrow.png" alt="" class="ml-2" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_box">
            <div class="banner2">
              
              <div class="slider-detail">
                <div class="slider_detail-heading">
                  <h2>
                    Nós te mostramos
                  </h2>
                  <h1>
                    o caminho 
                  </h1>
                </div>
                <div class="slider_detail-text">
                  <p>
                    Já se viu ampliando seu conhecimento sobre Autoestima e Inteligência Emocional,
                     se abrindo para aprender o que a Autoestima de Águia tem para te ensinar? 
                     Pois aqui você vai perceber em poucos dias, os ganhos que terá com esse conhecimento.
                  </p>
                </div>
                <!-- <div class="slider_detail-btn">
                  <a href="">
                    <span>
                      Read More
                    </span>
                    <img src="images/arrow.png" alt="" class="ml-2" />
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="carousel-item">
          <div class="slider_box">
            <div class="banner3">
              <div class="fixed_company-detail">
                <p>
                  Security Guard Company
                </p>
              </div>
              <div class="slider-detail">
                <div class="slider_detail-heading">
                  <h2>
                    We Are
                  </h2>
                  <h1>
                    Provided security services
                  </h1>
                </div>
                <div class="slider_detail-text">
                  <p>
                    Uma frase super motivacional aqui que vai te fazer chorar.
                    Uma frase super motivacional aqui que vai te fazer chorar.
                    Uma frase super motivacional aqui que vai te fazer chorar.
                  </p>
                </div>
                 <div class="slider_detail-btn">
                  <a href="">
                    <span>
                      Read More
                    </span>
                    <img src="images/arrow.png" alt="" class="ml-2" />
                  </a>
                </div> 
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- end slider section -->

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
              Bem Vindo
            </h3>
            <h2>
              Seja Bem vindo, você que procura elevar sua autoestima
            </h2>
            <p>
              Gleucha Maior é responsável pelos treinamentos e palestras 
              do Instituto de Coaching Roberto Maior, empresa especializada 
              em educação e inteligência emocional. Através da metodologia de 
              coaching de desempenho, alia seus 12 anos de experiência como Gestora 
              de multinacionais e seu conhecimento acadêmico, para formar gestores 
              de alta performance.
            </p>
            <div class="welcome_detail-btn">
              <a href="{{ route('about') }}">
                <span>
                  Saiba Mais
                </span>
                <img src="images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end welcome section -->

  <!-- service section -->
  <section class="service_section ">
    <div class="container">
      <div class="service_detail">
        <h3>
          Nós
        </h3>
        <h2>
          Oferecemos os serviços:
        </h2>
      </div>
      <div class="service_img-container">
        <div class="service_img-box i-box-1">
          <a href="https://www.hotmart.com/product/autoestima-de-aguia-como-elevar-sua-autoestima-nas-alturas/S36564939R"> Curso Hotmart</a>
        </div>
        <div class="service_img-box i-box-2">
          <a href="{{ route('contact') }}">Cursos de imerção</a>
        </div>
        <div class="service_img-box i-box-3">
          <a href="{{ route('contact') }}">Sessões individuais e em grupo </a>
        </div>
        <div class="service_img-box i-box-4">
          <a href="{{ route('contact') }}"> Palestras</a>
        </div>
      </div>
      <div class="service_btn">
        <a href="{{ route('service') }}">
          <span>
            Saiba Mais
          </span>
          <img src="images/arrow-black.png" alt="" class="ml-2" />
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- security section -->

  <section class="security_section layout_padding">
    <h3>
      Depoimentos
    </h3>
    <h2>
      O Que os clientes tem falado?
    </h2>
    <div class="security_container">
      <div class="carousel-wrap">
        <div class="owl-carousel">
          <div class="item">
            <div class="security_img-box i-box-1">
              <a href="{{ route('service') }}"> View More</a>
            </div>
          </div>
          <div class="item">
            <div class="security_img-box i-box-2">
              <a href="{{ route('service') }}"> View More</a>
            </div>
          </div>
          <div class="item">
            <div class="security_img-box i-box-3">
              <a href="{{ route('service') }}"> View More</a>
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
    
  </section>
  <!-- end security section -->


  <!-- story section -->

  <section class="layout_padding story_section">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="images/security.jpg" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="story_detail">
            <h3>
              Nosso
            </h3>
            <h2>
              Foco com você
            </h2>
            <p>
              Esse curso é um grande presente para quem quer se desenvolver mas está com baixa disponibilidade financeira.
              Visa sanar as dores causadas pela baixa autoestima, contando com ferramentas de coaching, estudos de programação nerolinguísticas e psicologia positiva. 
              O cliente terá um passo a passo, com a facilidade de um devocional de 30 minutos de dedicação diária para mudar seus comportamentos, seus pensamentos e sentimentos, a fim de se transformar em sua melhor versão.
              Esse curso foi pensado inicialmente para mulheres, mas entendo que todos temos impedimentos que gostaríamos de eliminar.
            </p>
            <div class="story_detail-btn">
              <a href="{{ route('afiliacao') }}">
                <span>
                  Saiba Mais
                </span>
                <img src="images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end story section -->

  <!-- contact section -->
  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div id="map" class="h-100 w-100 ">
          </div>
        </div>
        <div class=" col-md-6 contact_form-container">
          <div class="contact_box">
            <form action="https://formsubmit.co//autoestimadeaguia@gmail.com" method="POST">
              <input type="text" name="message" placeholder="Seu Nome">
              <input type="email" name="email" placeholder="Email">
              <input type="text" name="message" placeholder="Número de Telefone">
              <input type="text" name="message" placeholder="Menssagem">
              <div>
                <button type="submit">
                  Enviar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>

  <!-- end contact section -->
        </div>
    </div>
@endsection