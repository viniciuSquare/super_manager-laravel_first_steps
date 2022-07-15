@extends('site.layouts.base')

@section('title', 'Main')

@section('content')

    <div class="main-content">
        <div class="left">
            <div class="info">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.<p>
                <div class="call">
                    <img src="/img/check.png">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="call">
                    <img src="img/check.png">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="img/player_video.jpg">
            </div>
        </div>

        <div class="right">
            <div class="contact">
                <h1>Contact</h1>
                <p>If there's some question, fill the form bellow.<p>
                @component('site.layouts._components.contact_form', [ 'class' => 'white-border' ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection