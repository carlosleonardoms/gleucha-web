@extends('layouts.app')

@section('content')
    <div class="blog_title">
        <a href="{{ route('dashboard') }}"><h1>Blog AUTOESTIMA DE ÁGUIA</h1></a>
    </div>
    <div class="flex justify-center ">
        <div class="w-8/12 bg white p-6 rounded-lg">
            <!-- story section -->
            <div style="padding: 50px;">

            <section class="layout_padding story_section ">
            <div class="container-fluid">
                <div class="row">
                    <div class=" ">
                        <div class="blog_container">
                            @if($posts->count())
                                @foreach ($posts as $post)

                                    <div class="blog_posts">
                                        <a href="{{ route('blog', $post->id) }}">
                                        <H4 style="font-weight: bold; text-align:center; font-size:larger">{{ $post->title }}</H4>
                                        </a>
                                        <span>{{$post->created_at->diffForHumans()}}</span>
                                        <p>{!! Str::limit($post->body, 270) !!}</p>    
                                        <ul class="blog-link">
                                            <li><a href="{{ route('blog', $post->id) }}"><p>Ler mais</p></a> </li>
                                            <li><a href="{{ route('contact') }}"><p>Quer falar com a gente?</p></a></li>
                                        </ul>                                                                            
                                    </div>
                                @endforeach
                                <div style=" margin-left: 40%;">
                                     {{$posts->links('pagination::bootstrap-4')}}
                                </div>
                                <!-- {{ $posts->links() }} -->
                            @else
                                <p>There are no posts</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            </section>
            </div>

            <!-- end story section -->
            <a href="{{ route('service') }}">
                <div class="service_title">
                    <h1>O que acha de checar nossos serviços?</h1>
                </div>
            </a>
            <div class="flex justify-center ">
        <div class="w-8/12 bg white p-6 rounded-lg">
            <!-- service section -->
            <section class="service_section layout_padding-top" style="padding: 4ch;">
                <div class="container">
                <div class="service_detail">
                    <h3>
                    Nós
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
                    <a href="{{ route('service') }}">Cursos de imerção </a>
                    </div>
                    <div class="service_img-box i-box-3">
                    <a href="{{ route('service') }}">Sessões individuais e em grupo</a>
                    </div>
                    <div class="service_img-box i-box-4">
                    <a href="{{ route('service') }}"> Palestras</a>
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
            </section>
            <!-- end service section -->

        </div>
    </div>
        </div>
    </div>
@endsection