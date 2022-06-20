<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>AutoEstimaDeAguia</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" href="{{ asset('css/app.css')}}" >

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,500&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('css/style.css')}}" >
  <!-- responsive style -->
  <link rel="stylesheet" href="{{ asset('css/responsive.css')}}" >
</head>

<body>
  <!-- header section strats -->
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{ route('home') }}">
          <div class="logo_box">
            <img src="{{ asset('images/logo.png') }}" alt="eita" />
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">Sobre Gleucha </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('service') }}">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">Blog</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('afiliacao') }}">Afiliação </a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @endguest
            @auth
            <li class="nav-item">
              <form class="nav-link" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" href="#">Logout</button>
              </form>
            </li>
            @endauth
          </ul>
         <!--  <form class="form-inline my-2 my-lg-0">
            <input class="form-control nav_search-input mr-sm-2 d-none" type="search" placeholder="Search"
              aria-label="Search" value="" />
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form> -->
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->


  @yield('content')


  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class=" col-md-4 info_detail">
          <div>
            <p>
              Já se viu ampliando seu conhecimento sobre Autoestima e Inteligência Emocional,
               se abrindo para aprender o que a Autoestima de Águia tem para te ensinar? 
               Pois aqui você vai perceber em poucos dias, os ganhos que terá com esse conhecimento.
            </p>
          </div>
        </div>
        <div class=" col-md-4 address_container">
          <div>
            <h3>
              Entre em contato conosco:
            </h3>
            <div class="address_link-container">
              <!-- <a href="">
                <img src="images/location.png" alt="">
                <span> Address: 73 Canal Street, New York, NY
                </span>
              </a> -->
              <a href="">
                <img src="images/phone.png" alt="">
                <span> Tel: +55 81 8367-0014
                </span>
              </a>
              <a href="">
                <img src="images/mail.png" alt="">
                <span>
                  Email: autoestimadeaguia@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class=" col-md-4 news_container">
          <div>
            <div>
              <h3>
                Para receber novidades

              </h3>
              <form action="https://formsubmit.co//autoestimadeaguia@gmail.com" method="POST">
                @csrf
                <input type="email" name="email" placeholder="INSIRA SEU EMAIL" required>
                <input type="hidden" name="_subject" value="Email vindo do site AUTOESTIMA DE AGUIA">
                <div>
                  <button type="submit">
                    Enviar
                  </button>
                </div>
              </form>
            </div>
            <div class="social_container">
              <div>
                <a href="https://www.facebook.com/gleuchamaiorcoaching/?ref=bookmarks"> <img src="images/fb.png" alt=""></a>
              </div>
              <div>
                <a href="https://www.instagram.com/gleuchamaior/"><img src="images/linkedin.png" alt=""></a> 
              </div>
              <div>
                <a href="https://www.youtube.com/channel/UCao5jMHxR-0Kt4wHBiGu0Mw?view_as=subscriber"><img src="images/youtube.png" alt=""></a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      2022 * AUTOESTIMA DE ÀGUIA by
      <a href="{{ route('home') }}">Gleucha Maior</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.tiny.cloud/1/5r6zpbqltyd0eo4g46dvm4mq2iuwme0bkgq4yjbxyazdmnm4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
        tinymce.init({
            selector:'#body'
        });
    </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <script>
    document.addEventListener("click", e => {
    const isDropdownButton = e.target.matches("[data-dropdown-button]")
    if (!isDropdownButton && e.target.closest('[data-dropdown') != null) return

    let currentDropdown
    if (isDropdownButton) {
        currentDropdown = e.target.closest('[data-dropdown]')
        currentDropdown.classList.toggle('active')
    }

    document.querySelectorAll("[data-dropdown].active").forEach(dropdown=> {
        if (dropdown === currentDropdown) return
        dropdown.classList.remove('active')
    })
})

  </script>

  <script>
    $(".nav_search-btn").click(function () {
      if ($(".nav_search-input").hasClass("d-none")) {
        event.preventDefault();
        $(".nav_search-input")
          .animate({
              left: "-1000px"
            },
            "1000000"
          )
          .removeClass("d-none");
      } else {
        $(".nav_search-input")
          .animate({
              left: "0px"
            },
            "1000000"
          )
          .addClass("d-none");
      }
    });
  </script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: -8.1107,
          lng: -35.2979
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: -8.1107,
          lng: -35.2979
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->

</body>

</html>