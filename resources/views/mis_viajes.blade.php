@extends('layout')

@section('titulo', 'Mis Viajes...')

@section('contenido')
    <div class="parallax"><h2>Mis Viajes</h2></div>

    <div class="container mt-5 p-5 bg-light rounded shadow-sm">
        <div class="row mb-2 borde">
            <div class="col-md-3 d-flex justify-content-start"><h3>Mis Viajes</h3></div>
            <div class="col-md-6 justify-content-center" >
            </div>
            <div class="col-md-3 col-lg-3 d-flex justify-content-end">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Tiempo (Horas)</th>
                    <th scope="col">Asientos</th>
                    <th scope="col">Distancia (Millas)</th>
                    <th scope="col">Reservados</th>
                </tr>
                </thead>
                <tbody>
                @forelse($viajes as $viaje)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$viaje->origen}}</td>
                        <td>{{$viaje->destino}}</td>
                        <td>Q{{$viaje->precio}}</td>
                        <td>{{$viaje->tiempo}}</td>
                        <td>{{$viaje->espacio}}</td>
                        <td>{{$viaje->distancia}}</td>
                        <td>{{$viaje->reserva}}</td>
                    </tr>
                @empty
                    <tr>
                        <th>No tienes viajes reservados...</th>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection