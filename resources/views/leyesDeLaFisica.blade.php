<!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
@extends('layouts/plantilla')
@section('titulo','Leyes de la Física')
@section('contenido')
<div class="container">
    <div class="title">
        Leyes de la f&#237;sica
    </div>
    <div class="subtitle">
        F&#237;sica
    </div>
    <div class="definicion">
        <p>
            El t&#233;rmino viene del lat&#237;n lex, que significa orden o regla y physicus, que hace alusi&#243;n a
            algo natural, juntos significan reglas naturales o principios naturales, en este caso, la f&#237;sica es una
            ciencia que se encarga de estudiar todas aquellas propiedades referentes a la materia y la energ&#237;a,
            ac&#225; tambi&#233;n incluyen tambi&#233;n el espacio, el tiempo y todas aquellas interacciones comunes
            entre cada elementos mencionado anteriormente.
            <br>
            Se dice que estas son omnipotentes, pues cada part&#237;cula del universo las cumple sin excepci&#243;n
            alguna, tambi&#233;n se dice que son generales y que tienen la capacidad de conservar su magnitud, as&#237;
            como de expresar todas las simetr&#237;as que existen en el espacio y el tiempo. Por &#250;ltimo, son
            reversibles, aunque esto solo sucede cuando no son cu&#225;nticas.
        </p>
        <img src="{{asset('img/que-es-fisica.jpg')}}" alt="">
    </div>
    <div class="subtitle">
        Leyes
    </div>
    <div class="block">
        <div class="Ley">
            <img src="{{asset('img/newton.jpg')}}" alt="" width="100%">
            <span class="tema">Leyes de Newton</span>
            <a href="/newton">Mas informacion</a>
        </div>
        <div class="Ley">
            <img src="{{asset('img/leygases.jpg')}}" alt="" width="100%">
            <span class="tema">Ley de los Gases</span>
            <a href="/gases">Mas Informacion</a>
        </div>
    </div>
    <div class="block">
        <div class="Ley">
            <img src="{{asset('img/avogadro.jpg')}}" alt="" width="100%">
            <span class="tema">Ley de avogadro</span>
            <a href="/avogadro">Mas informacion</a>
        </div>
        <div class="Ley">
            <img src="{{asset('img/termodinamica.png')}}" alt="" width="100%">
            <span class="tema">Ley de la termodinamica</span>
            <a href="/leyTermodinamica">Mas Informacion</a>
        </div>
    </div>
</div>
<!-- <script src="{{asset('js/main.js')}}"></script> -->
@endsection