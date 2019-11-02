@extends('layout')

@section('titulo', 'Destinos...')

@section('contenido')
    <div class="parallax"><h2>Destinos</h2></div>
    <div class="container mt-5 p-5 bg-light rounded shadow-sm">
        <div class="row mb-2 borde">
            <div class="col-md-3 d-flex justify-content-start"><h3>Destinos</h3></div>
            <div class="col-md-6 justify-content-center" >
            </div>
            <div class="col-md-3 col-lg-3 d-flex justify-content-end">
                @if($rango == '0') <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal_crear_destino">Crear Destino</button> @endif
            </div>
        </div>
        <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Lugar</th>
                <th scope="col">Descripcion</th>
                @if($rango == '0')
                <th scope="col"></th>
                    @endif
            </tr>
            </thead>
            <tbody>
            @forelse($destinos as $destino)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$destino->lugar}}</td>
                <td>{{$destino->descripcion}}</td>
                @if($rango == '0')
                <td>
                    <a href="{{route('eliminar_destino', $destino->id_destino) }}" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash-alt"></i></a>
                </td>
                    @endif
            </tr>
            @empty
            <tr>
                <th>No hay destinos registrados...</th>
            </tr>
                @endforelse
            </tbody>
        </table>
        </div>
    </div>

    @if($rango == '0')
        <div class="modal fade" id="modal_crear_destino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label >Lugar</label>
                                <input type="text" class="form-control" name="lugar">
                            </div>
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input type="text" class="form-control" name="descripcion">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button id="crear_destino" type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('#crear_destino').click(function(){
                var url = "{{route('crear_destino')}}";
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

    @endsection