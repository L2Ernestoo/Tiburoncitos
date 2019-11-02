<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Tiburoncitos - @yield('titulo')</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.3/examples/carousel/carousel.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"/>
</head>
<body>
<style>
    .borde_menu{
        border-bottom: 2px solid #1f648b;
    }
    .borde_titulo{
        border-bottom: 1px solid #1f648b;
    }
    .parallax {
        /* The image used */
        background-image: url("https://upload.wikimedia.org/wikipedia/commons/5/54/Ciudad_de_Puerto_Barrios_de_noche.jpg");

        /* Set a specific height */
        height: 350px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .parallax h2{
        text-align: center;
        color: #FFF;
        display: block;
        padding-top: 150px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top borde_menu">
    <a class="navbar-brand" href="{{route('inicio')}}">Tiburoncitos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('rutas')}}">Viajes Disponibles <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('navios')}}">Navios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('equipo')}}">Nuestro Equipo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('mis_viajes')}}">Tus Viajes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('origenes')}}">Origenes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('destinos')}}">Destinos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</nav>

    @yield('contenido')


</body>
</html>