<?php

namespace App\Http\Controllers;
use App\Destino;
use App\Origen;
use App\Ruta;
use App\Viaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class rutaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function generateID(){
        $id = random_int(100001,999998);
        if($this->existID($id)){
            return $this->generateID();
        }
        return $id;
    }

    function existID($id){
        if(Ruta::find($id)) {
            return Ruta::find($id);
        }
    }
    public function index(){

        $rutas = Ruta::join('origen', 'ruta.origen_id_origen', '=', 'origen.id_origen')
            ->join('destino', 'ruta.destino_id_destino', '=', 'destino.id_destino')
            ->select('ruta.*', 'destino.lugar as destino', 'origen.lugar as origen')
            ->get();

        $origen = Origen::pluck('id_origen', 'lugar');
        $destino = Destino::pluck('id_destino', 'lugar');

        $rango = Auth::user()->rango;
        return view('rutas', compact('rutas', 'rango', 'origen', 'destino'));
    }

    public function crear(Request $request){

        Ruta::create([
            'id_ruta' => $this->generateID(),
            'tiempo' => $request->tiempo,
            'precio' => $request->precio,
            'espacio' => $request->espacio,
            'distancia' => $request->distancia,
            'origen_id_origen' => $request->origen_id_origen,
            'destino_id_destino' => $request->destino_id_destino
        ]);

        return redirect()->route('rutas');

    }

    public function reservar(Request $request){

        $id_user = Auth::user()->id;

        Viaje::create([
            'id_viaje' => $this->generateID(),
            'reserva' => $request->reserva,
            'ruta_id_ruta' => $request->id_ruta,
            'users_id' => $id_user,
        ]);

        return redirect()->route('rutas');
    }

    public function eliminar($ruta){
        $ruta = Ruta::find($ruta);

        $ruta->delete();
        return redirect()->route('rutas');

    }

    public function mis_viajes(){

        $id_user = Auth::user()->id;

        $viajes = Viaje::where('users_id', $id_user)
            ->join('ruta', 'ruta.id_ruta', '=', 'viaje.ruta_id_ruta')
            ->join('origen', 'origen.id_origen', '=', 'ruta.origen_id_origen')
            ->join('destino', 'destino.id_destino', '=', 'ruta.destino_id_destino')
            ->select('viaje.*', 'ruta.*', 'destino.lugar as destino', 'origen.lugar as origen')
            ->get();

        return view('mis_viajes', compact('viajes'));
    }


}
