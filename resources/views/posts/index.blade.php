@extends('layouts.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-8/12 bg white p-6 rounded-lg">
            @auth
                <form action="{{ route('posts') }}" method="POST" style="margin: 4px;">
                    @csrf

                    <div style="margin-top: 5px;">
                        <label for="title"></label>
                        <textarea name="title" id="title" cols="50" rows="1" class="@error('title') border-red-500 @enderror" placeholder="Title here!"></textarea>   
                    </div>

                    @error('title')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror

                    <div style="margin-top: 5px;">
                        <label for="body"></label>
                        <textarea name="body" id="body" cols="100" rows="7" class="@error('body') border-red-500 @enderror" placeholder="Post something!"></textarea>   
                    </div>

                    @error('body')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror

                    <div style="margin: 10px; margin-bottom: 30px;">
                        <button type="submit">Post</button>
                    </div>

                </form>
            @endauth
            @if($posts->count())
                @foreach ($posts as $post)

                    <div class="teste-post">
                       <H4>{{ $post->title }}</H4> <span>
                           {{$post->created_at->diffForHumans()}}</span>
                       <p>{!! $post->body !!}</p>
                    </div>
                    @auth
                        <div class="teste-post">
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit">Delete</button>
                            </form>
                        </div>
                        
                    @endauth
                @endforeach
                <div style=" margin-left: 45%;">
                    {{$posts->links('pagination::bootstrap-4')}}
                </div>
            @else
                <p>There are no posts</p>
            @endif

        </div>
    </div>
    
@endsection