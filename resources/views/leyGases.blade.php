<!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
@extends('layouts/plantilla')
@section('titulo','Leyes de la Física')
@section('contenido')
<div class="container">
    <div class="title">
        Ley General de los Gases
    </div>
    <div class="def">
        Surge como resultado de la mezcla de tres leyes simples: <br>
        <b>La ley de Boyle,</b> <br>
        <b>La ley de Charles,</b> <br>
        <b>La ley de Gay-Lussac.</b> <br>
        Matem&#225;ticamente estas leyes describen cada una de las variables termodin&#225;micas con respecto a otras, mientras el resto se mantiene constante.
    </div>
    <div class="ley">
        <div class="def">
            <div class="tema">
                <b>Ley de Boyle</b>
            </div>
            La ley de Boyle formula que el volumen y la presi&#243;n se encuentran inversamente proporcional entre ellos, al estar en una temperatura constante.
        </div>
        <div class="imagen">
            <img src="{{asset('img/Ley-de-boyle.webp')}}" alt="" width="100%">
        </div>
    </div>
    <div class="ley">
        <div class="imagen">
            <img src="{{asset('img/ley-de-charles.webp')}}" alt="" width="100%">
        </div>
        <div class="def">
            <div class="tema">
                <b>Ley de Charles</b>
            </div>
            La ley de Charles, por su parte, afirma que el volumen y la temperatura ser&#225;n proporcionales entre s&#237;, siempre que la presi&#243;n se conserve constantemente. 
        </div>
    </div>
    <div class="ley">
        <div class="def">
            <div class="tema">
                <b>Ley de Gay-Lussac</b>
            </div>
            La ley de Gay-Lussac enuncia que puede existir una directa proporcionalidad entre la presi&#243;n y la temperatura, siempre que el volumen se conserve constantemente.
        </div>
        <div class="imagen">
            <img src="{{asset('img/ley-de-gay-lussac.jpg')}}" alt="" width="100%">
        </div>
    </div>
</div>
@endsection