@extends('layout')

@section('titulo', 'Nuestros Navios...')

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
            <div class="col-lg-4 text-center">
                <img src="https://nebula.wsimg.com/01eb95cc8e8dda3929a0cbef6dae2696?AccessKeyId=5F79B4A3FB0BD68122A7&disposition=0&alloworigin=1" class="bd-placeholder-img rounded-circle" width="300">
                <h4>La Fina</h4>
                <small>Muy comoda para viajar para familia mediana asientos super acolchonados.</small>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <img src="https://cdn1.yumping.com.mx/emp/fotos/5/4/2/5/2/tb_p-54252-la-lanchita_15120367875883.jpg" class="bd-placeholder-img rounded-circle" width="270">
                <h4>La Churrasquera</h4>
                <small>Para viajar junto con los cuates de la U e ir a churrasquear.</small>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <img src="https://www.lapescatamaulipas.com/assets/paseo_en_lancha_1-570d7ef373e9f1f72259176511375b812032d41e2ea99cea116ff1211cdddc7a.jpg" class="bd-placeholder-img rounded-circle" width="300">
                <h4>La Cantinera</h4>
                <small>Perfecta para ir rapidamente y economicamente con los cuates locos.</small>
            </div>
            <!-- /.col-lg-4 -->
        </div><!-- /.row -->



@endsection