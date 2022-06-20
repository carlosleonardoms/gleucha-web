@extends('layouts.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-8/12 bg white p-6 rounded-lg">
            <div class=" col-md-6 contact_form-container">
                <div class="contact_box" style="display: flex; align-items:center;">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Seu Nome" value="{{ old('name') }}">

                        @error('name')
                            <div style="color: red;">
                                {{ $message }}
                            </div> 
                        @enderror

                        <input type="text" name="username" placeholder="Seu username" value="{{ old('username') }}">

                        @error('username')
                            <div style="color: red;">
                                {{ $message }}
                            </div> 
                        @enderror
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
                        <input type="password" name="password_confirmation" placeholder="Repita sua senha" >

                        @error('password_confirmation')
                            <div style="color: red;">
                                {{ $message }}
                            </div> 
                        @enderror
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
@endsection