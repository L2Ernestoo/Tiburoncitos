<?php

namespace App\Http\Controllers;

use App\Origen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class origenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $origenes = Origen::all();
        $rango = Auth::user()->rango;

        return view('origenes', compact('origenes', 'rango'));
    }

    function generateID(){
        $id = random_int(100001,999998);
        if($this->existID($id)){
            return $this->generateID();
        }
        return $id;
    }

    function existID($id){
        if(Origen::find($id)) {
            return Origen::find($id);
        }
    }

    public function crear(Request $request){

        Origen::create([
            'id_origen' => $this->generateID(),
            'lugar' => $request->lugar,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('origenes');

    }

    public function eliminar($origen){
        $origen = Origen::find($origen);

        $origen->delete();
        return redirect()->route('origenes');

    }
}
