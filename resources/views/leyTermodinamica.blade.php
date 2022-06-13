<!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
@extends('layouts/plantilla')
@section('titulo','Leyes de la Física')
@section('contenido')
<div class="container">
    <div class="title">
        Leyes de la termodin&#225;mica
    </div>
    <div class="def">
        Son un conjunto de leyes sobre las que se basa la termodin&#225;mica.
        En concreto, se trata de cuatro leyes que son universalmente v&#225;lidas
        cuando se aplican a sistemas que caen dentro de las restricciones impl&#237;citas en cada uno.
    </div>
    <div class="ley">
        <div class="imagen">
            <img src="{{asset('img/ley-cero-termodinamica.jpg')}}" alt="" width="100%">
        </div>
        <div class="def">
            <div class="tema">
                <b>La ley cero de la termodin&#225;mica </b>
            </div>
            Establece que “si dos sistemas termodin&#225;micos que est&#225;n en equilibrio t&#233;rmico con un tercero,
            tambi&#233;n est&#225;n en equilibrio entre s&#237;”.
        </div>
    </div>
    <div class="ley">
        <div class="def">
            <div class="tema">
                <b>Primera ley de la termodin&#225;mica o ley de la conservaci&#243;n de la energ&#237;a</b>
            </div>
            Este principio establece que “La energ&#237;a total de un sistema aislado ni se crea ni se destruye,
            permanece constante”.
        </div>
        <div class="imagen">
            <img src="{{asset('img/primera-ley-de-la-termodinamica.gif')}}" alt="" width="100%">
        </div>
    </div>
    <div class="ley">
        <div class="imagen">
            <img src="{{asset('img/segunda-ley-termodinamica.png')}}" alt="" width="100%">
        </div>
        <div class="def">
            <div class="tema">
                <b>Segunda ley de la termodin&#225;mica</b>
            </div>
            Regula la direcci&#243;n en que se han de llevar a cabo los procesos termodin&#225;micos y, por lo tanto, la
            imposibilidad de que ocurran en el sentido contrario. Por ejemplo, la transferencia de calor se puede
            producir de un cuerpo caliente a otro fr&#237;o, pero no a la inversa.
        </div>
    </div>
    <div class="ley">
        <div class="def">
            <div class="tema">
                <b>Tercera ley de la termodin&#225;mica</b>
            </div>
            Afirma que es imposible alcanzar una temperatura igual al cero absoluto mediante un n&#250;mero finito de
            procesos f&#237;sicos. El cero absoluto equivale a 0 kelvin, es decir, a -273 grados Celsius. Esta ley fue
            propuesta por Walther Nernst.
        </div>
        <div class="imagen-segunda">
            <img src="{{asset('img/tercera-ley-termodinamica.jpg')}}" alt="" width="100%">
        </div>
    </div>
</div>
@endsection