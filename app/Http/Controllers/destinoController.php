<?php

namespace App\Http\Controllers;

use App\Destino;
use App\Ruta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class destinoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $destinos = Destino::all();
        $rango = Auth::user()->rango;


        return view('destinos', compact('destinos', 'rango'));
    }

    function generateID(){
        $id = random_int(100001,999998);
        if($this->existID($id)){
            return $this->generateID();
        }
        return $id;
    }

    function existID($id){
        if(Destino::find($id)) {
            return Destino::find($id);
        }
    }

    public function crear(Request $request){

        Destino::create([
            'id_destino' => $this->generateID(),
            'lugar' => $request->lugar,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('destinos');

    }

    public function eliminar($id){
        $destino = Destino::find($id);

        $destino->delete();
        return redirect()->route('destinos');

    }
}
