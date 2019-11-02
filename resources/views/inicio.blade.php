@extends('layout')

@section('titulo', 'Viaja Seguro, Viaja como tiburon...')

@section('contenido')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.imgur.com/nebXf0H.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Tiburoncitos, since 1998.</h1>
                        <p>Mojando a sus pasajeros desde inicio hasta fin de su viaje.</p>
                        <p><a class="btn btn-lg btn-info" href="{{route('rutas')}}" role="button">RESERVA TU VIAJE!!!</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.imgur.com/meFetMy.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Otro tipo de experiencia.</h1>
                        <p>Comodida maxima en tu viaje.</p>
                        <p><a class="btn btn-lg btn-info" href="{{route('rutas')}}" role="button">RESERVA</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.imgur.com/Kv5pLEt.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Experiencia Unica.</h1>
                        <p>Contamos con viajes nocturno en donde podremos apreciar las luces de nuestro muelle.</p>
                        <p><a class="btn btn-lg btn-info" href="{{route('rutas')}}" role="button">RESERVA</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="https://cdn.flixbus.de/2018-08/comfort-convenience.png" class="bd-placeholder-img rounded-circle" width="70">
                <h4>Comodidad a bordo</h4>
                <small>Nuestras lanchas estan equipadas con salvadidas de ultima generacion y asientos acolchonados para la comodida maxima del pasajero..</small>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="https://cdn.flixbus.de/2018-08/service-satisfaction.png" class="bd-placeholder-img rounded-circle" width="70">
                <h4>Clientes satisfechos</h4>
                <small>Nuestros clientes se bajan de nuestros navios totalmente satisfechos en su viaje por su comodida y rapidez, eso si! un poco mojados por las aguas saltarinas de Puerto Barrios.</small>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="https://cdn.flixbus.de/2018-08/sustainable.png" class="bd-placeholder-img rounded-circle" width="70">
                <h4>Viaja de forma ecológica</h4>
                <small>En nuestros navios utilizamos un combustible totalmente ecologico que le denominamos <b>Rust-Eze</b> que no genera demasiado co2.</small>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->



@endsection