@extends('layouts.app')

@section('content')
    <div class="flex justify-center ">
        @if (session('status'))
            <div style="text-align:center; color:red; margin-top: 50px">
                {{ session('status') }}
            </div>
        @endif
        <div class="w-8/12 bg white p-6 rounded-lg">
            <div class=" col-md-6 login_container">
                <div class="contact_box">
                    <div class="login_form">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">

                            @error('email')
                                <div style="color: red;">
                                    {{ $message }}
                                </div> 
                            @enderror
                            <input type="password" name="password" placeholder="Senha">

                            @error('password')
                                <div style="color: red;">
                                    {{ $message }}
                                </div> 
                            @enderror
                            <div>
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Lembre-se de mim</label>
                            </div>
                            <div>
                                <button type="submit">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection