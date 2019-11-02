@extends('layout')

@section('titulo', 'Nuestro Equipo Tiburoncin...')

@section('contenido')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7f/Ciudad_de_Puerto_Barrios.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Tiburoncitos, since 1998.</h1>
                        <p>Mojando a sus pasajeros desde inicio hasta fin de su viaje.</p>
                        <p><a class="btn btn-lg btn-info" href="{{route('rutas')}}" role="button">RESERVA TU VIAJE!!!</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://www.elpuertoinforma.com.gt/wp-content/uploads/2018/03/lancha.jpg6_.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Otro tipo de experiencia.</h1>
                        <p>Comodida maxima en tu viaje.</p>
                        <p><a class="btn btn-lg btn-info" href="{{route('rutas')}}" role="button">RESERVA</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://www.elpuertoinforma.com.gt/wp-content/uploads/2018/02/DJI_0008.jpg" class="d-block w-100" alt="...">
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
            <div class="col-lg-3 text-center">
                <img src="https://i.pinimg.com/originals/c6/d1/7a/c6d17aa55defcc45e4f3c1e9d01e3e5f.jpg" class="bd-placeholder-img rounded-circle" width="100">
                <h4>Ernesto Orellana</h4>
                <small>SEO, software technician, designer.</small>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3 text-center">
                <img src="https://cdn2.iconfinder.com/data/icons/character-3/100/people_character_avatar_color-22-512.png" class="bd-placeholder-img rounded-circle" width="155">
                <h4>Mynor Barrientos</h4>
                <small>Logistic, boat pilot</small>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3 text-center">
                <img src="https://cdn4.iconfinder.com/data/icons/people-avatars-12/24/people_avatar_head_male_artist_3-512.png" class="bd-placeholder-img rounded-circle" width="155">
                <h4>Hugo Lemus</h4>
                <small>Logistic</small>
            </div>
            <div class="col-lg-3 text-center">
                <img src="https://cdn2.iconfinder.com/data/icons/character-3/100/people_character_avatar_color-21-512.png" class="bd-placeholder-img rounded-circle" width="155">
                <h4>Bryan Cotto</h4>
                <small>Logistic, boat pilot</small>
            </div>
            <!-- /.col-lg-4 -->
        </div><!-- /.row -->



@endsection