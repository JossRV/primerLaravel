<!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
@extends('layouts/plantilla')
@section('titulo','Leyes de la Física')
@section('contenido')
<div class="container">
    <div class="title">
        Ley de Avogadro
    </div>
    <div class="def">
        <p>
            Forma parte de las famosas leyes de los gases ideales. Fue formulada por primera vez por el f&#237;sico
            Amedeo
            Avogadro, quien a trav&#233;s de su teor&#237;a acerca de la cantidad de mol&#233;culas existentes en unas
            muestras de gas, logra explicar c&#243;mo los gases se mezclan, conservando una proporci&#243;n simple entre
            ellos.
        </p>
        <p>
            Se postulo que: <br>
            <b>“los vol&#250;menes similares de gas de distintas sustancias, al ser calculados en igualdad de
                condiciones en presi&#243;n y temperatura, presentan la misma cantidad de part&#237;culas.”</b>
        </p>
    </div>    
    <div class="imagen">
        <img src="{{asset('img/Ley-de-Avogadro.jpg')}}" alt="">
    </div>
    <div class="def">
        <p>
            <span class="pregunta"><b>&#191;Por qu&#233; sucede esto?</b></span><br>
            Porque cuando se aumenta la cantidad de gas dentro de un recipiente, va a
            existir mayor n&#250;mero de mol&#233;culas, lo que originar&#225; un alza en la frecuencia de las
            colisiones contra las paredes del envase, lo que conlleva a que la presi&#243;n dentro del envase sea mucho
            mayor que la exterior, provocando que el &#233;mbolo se dirija hacia arriba s&#250;bitamente.
        </p>
    </div>
</div>
@endsection