@extends('layouts.app')
@section('content')
    @include('partials.carousel')
    @include('inicio.somos')
    @include('inicio.servicios')
    <section class="parallax parallax-1" data-type="background" data-speed="10" style="height: 100px;"></section>
    @include('inicio.galeria')
    <section class="parallax parallax-2" data-type="background" data-speed="10" style="height: 100px;"></section>
    @include('inicio.ofertas')
    @include('inicio.mapa')
    <div class="fb-customerchat" attribution=setup_tool page_id="101064961881158" theme_color="#e3342f" logged_in_greeting="¡Hola! Si tienes alguna pregunta, no dudes en escribirnos 🙂"      logged_out_greeting="¡Hola! Espero que te encuentres bien, dime en qué podemos ayudarte 😀"></div>
@endsection
@push('css')
<style>
    section.parallax {
        padding: 150px 0;
        background-position: 0 0;
    }
    section.parallax-1 {
        background-image: url("http://www.prettywarmi.com/images/separator1.jpg");
        background-position: 50% 0;
        background-repeat: repeat;
        background-attachment: fixed;
        background-size: cover;
        background-blend-mode: screen;
    }
    section.parallax-2 {
        background-image: url("http://www.prettywarmi.com/images/separator3.jpg");
        background-position: 50% 0;
        background-repeat: repeat;
        background-attachment: fixed;
        background-size: cover;
        background-blend-mode: screen;
    }
</style>
@endpush
@push('js')
<script>
    window.fbAsyncInit = function() {
      FB.init({
        appId            : '442668752937422',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v3.2'
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>
@endpush
