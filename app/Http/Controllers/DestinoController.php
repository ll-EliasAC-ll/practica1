<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    public function crear($idcliente){
        return view('Destino')->with('id_cliente', $idcliente);
    }

    public function guardar(Request $request){
        $request->validate([
            "provincia" => 'required',
            "departamento" => 'required',
            "distrito" => 'required',
            "direccion" => 'required'
        ]);
        $destino = new Destino();
        $destino->provincia = $request->provincia;
        $destino->departamento = $request->departamento;
        $destino->distrito = $request->distrito;
        $destino->direccion = $request->direccion;
        $destino->id_cliente = $request->id_cliente;
        $destino->save();
        echo 'Destino Guardado';

        //dd($request);
    }
}
