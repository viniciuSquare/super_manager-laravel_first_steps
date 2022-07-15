@extends('site.layouts.base')

@section('title', 'Contact')

@section('content')
    <div class="page-content">
        <div class="page-title">
            <h1>Get in contact</h1>
        </div>

        <div class="page-info">
            <div class="main-contact">
                @component('site.layouts._components.contact_form', ['class'=> 'black_border'])
                @endcomponent
            </div>
        </div>  
    </div>

    <div class="footer">
        <div class="social-networks">
            <h2>Social networks</h2>
            <img src="img/facebook.png">
            <img src="img/linkedin.png">
            <img src="img/youtube.png">
        </div>
        <div class="contact-area">
            <h2>Contact</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="location">
            <h2>Location</h2>
            <img src="img/mapa.png">
        </div>
    </div>
@endsection