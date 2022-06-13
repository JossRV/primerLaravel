<!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
@extends('layouts/plantilla')
@section('titulo','Leyes de la Física')
@section('contenido')
<div class="container">
    <div class="title">
        Leyes de Newton
    </div>
    <div class="ley1">
        <div class="tema">
            Primera Ley o Ley de Inercia
        </div>
        <div class="def">
            <p>
                <b>
                    Todo cuerpo permanece en su estado de reposo o de movimiento rectil&#237;neo uniforme a menos que otros
                    cuerpos act&#250;en sobre &#233;l.
                </b>
            </p>
        </div>
        <div class="imagen">
            <img src="{{asset('img/ley-inercia.jpg')}}" alt="">
        </div>
    </div>
    <div class="ley2">
        <div class="tema">
            Segunda Ley o Principio de la Din&#225;mica
        </div>
        <div class="def">
            <p>
                <b>La fuerza que actua sobre un cuerpo es directamente proporcional a la aceleraci&#243;n.</b>
                <br><br>
                Nos dice que la fuerza neta aplicada sobre un cuerpo es proporcional a la aceleraci&#243;n que adquiere
                dicho cuerpo. La constante de proporcionalidad es la masa del cuerpo, de manera que podemos expresar la
                relaci&#243;n de la siguiente manera:
            </p>
        </div>
        <div class="imagen">
            <img src="{{asset('img/dinamica.png')}}" alt="">
        </div>
    </div>
    <div class="ley3">
        <div class="tema">
            Tercera ley o Principio de acci&#243;n-reacci&#243;n
        </div>
        <div class="def">
            <p>
                <b>Cuando un cuerpo ejerce una fuerza sobre otro, &#233;ste ejerce sobre el primero una fuerza igual y de sentido opuesto.</b>
                <br><br>
                La tercera ley, tambi&#233;n conocida como Principio de acci&#243;n y reacci&#243;n nos dice que si un cuerpo A ejerce una acci&#243;n sobre otro cuerpo B, &#233;ste realiza sobre A otra acci&#243;n igual y de sentido contrario.
                <br>
                Esto es algo que podemos comprobar a diario en numerosas ocasiones. Por ejemplo, cuando queremos dar un salto hacia arriba, empujamos el suelo para impulsarnos. La reacci&#243;n del suelo es la que nos hace saltar hacia arriba.
            </p>
        </div>
        <div class="imagen">
            <img src="{{asset('img/accion-reaccion.jpg')}}" alt="">
        </div>
    </div>
</div>
@endsection