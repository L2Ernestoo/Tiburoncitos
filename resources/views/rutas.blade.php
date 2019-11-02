@extends('layout')

@section('titulo', 'Viajes Disponibles...')

@section('contenido')
    <div class="parallax"><h2>Viajes Disponibles</h2></div>

    <div class="container mt-5 p-5 bg-light rounded shadow-sm">
            <div class="row mb-2 borde">
                <div class="col-md-3 d-flex justify-content-start"><h3>Viajes Disponibles</h3></div>
                <div class="col-md-6 justify-content-center" >
                </div>
                <div class="col-md-3 col-lg-3 d-flex justify-content-end">
                   @if($rango == '0') <button type="button" class="btn btn-info" data-toggle="modal" data-target="#moda_crear_viaje">Crear Viaje</button> @endif
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
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($rutas as $ruta)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$ruta->origen}}</td>
                    <td>{{$ruta->destino}}</td>
                    <td>Q{{$ruta->precio}}</td>
                    <td>{{$ruta->tiempo}}</td>
                    <td>{{$ruta->espacio}}</td>
                    <td>{{$ruta->distancia}}</td>
                    <td>
                        <button type="button" onclick="modal_ruta('{{$ruta->id_ruta}}')" class="btn btn-sm btn-primary">Reservar</button>
                        @if($rango == '0') <a href="{{route('eliminar_viaje', $ruta->id_ruta) }}" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash-alt"></i></a> @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <th>No hay Viajes registrados...</th>
                </tr>
            @endforelse
            </tbody>
        </table>
        </div>
    </div>
    @if($rango == '0')
    <div class="modal fade" id="moda_crear_viaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Destino</label>
                            <select name="destino_id_destino" class="custom-select">
                                <option hidden>Selecciona...</option>
                                @foreach($destino as $lugar => $id)
                                <option value="{{$id}}">{{$lugar}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Origen</label>
                            <select name="origen_id_origen" class="custom-select">
                                <option hidden>Selecciona...</option>
                                @foreach($origen as $lugar => $id)
                                    <option value="{{$id}}">{{$lugar}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="text" class="form-control" name="precio">
                        </div>
                        <div class="form-group">
                            <label>Tiempo</label>
                            <input type="text" class="form-control" name="tiempo">
                        </div>
                        <div class="form-group">
                            <label >Asientos</label>
                            <input type="text" class="form-control" name="espacio">
                        </div>
                        <div class="form-group">
                            <label>Distancia</label>
                            <input type="text" class="form-control" name="distancia">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button id="crear_viaje" type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
            $('#crear_viaje').click(function(){
                var url = "{{route('crear_viaje')}}";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("form").serialize(),
                    success: function(data)
                    {
                       location.reload();
                    }
                });
            });
    </script>
    @endif

    <div class="modal fade" id="modal_reservar_viaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" class="id_ruta" name="id_ruta" hidden>
                        <div class="form-group">
                            <label>Cuantos Asientos quiere reservar?</label>
                            <input type="text" class="form-control" name="reserva">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button id="reservar_viaje" type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#reservar_viaje').click(function(){
            var url = "{{route('reservar_viaje')}}";
            $.ajax({
                type: "POST",
                url: url,
                data: $("form").serialize(),
                success: function(data)
                {
                    location.reload();
                }
            });
        });

        function modal_ruta(id_ruta){
            $('#modal_reservar_viaje').modal('show');
            $('.id_ruta').val(id_ruta);
        }
    </script>


@endsection