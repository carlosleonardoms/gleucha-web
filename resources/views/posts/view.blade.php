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
                            <div class="blog_posts">
                                <H4 style="font-weight: bold; text-align:center">{{ $post->title }}</H4> <span>
                                {{$post->created_at->diffForHumans()}}</span>
                                <p>{!! $post->body !!}</p>
                                <a href="{{ route('contact') }}"><p>Quer saber mais? fala com a gente!</p></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </section>
            </div>

            <!-- end story section -->
        </div>
    </div>
@endsection