@extends('layouts.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-8/12 bg white p-6 rounded-lg">
            <!-- contact section -->
            <section class="contact_section layout_padding">
                <div class="container-fluid">
                <div class="row">
                    <div class=" col-md-6">
                    <div id="map" class="h-100 w-100 ">
                    </div>
                    </div>
                    <div class=" col-md-6 contact_form-container">
                    <div class="contact_box">
                        <form action="https://formsubmit.co//autoestimadeaguia@gmail.com" method="POST">
                            @csrf
                            <input type="text" name="message" placeholder="Seu Nome">
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="text" name="message" placeholder="Número de Telefone">
                            <input type="text" name="message" placeholder="Menssagem" required>
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