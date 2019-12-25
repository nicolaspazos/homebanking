<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inversion;
use App\Accion;
use App\Balance;

class inversionesController extends Controller
{
    public function index()
    {   $inversion = Inversion::orderBy("id", "DESC")->get();
        $accion = Accion::orderBy("id", "DESC")->get();
        return view("inversiones", compact("inversion","accion"));
    }


    public function compraAccion(Request $request){
        $empresa = $request->get('nombreAccionCompra');
        $cantidad = $request->get('cantidadAccionesCompra');
        $precioAccion = $request->get('valorAccionesCompra');

        $lastSaldo= Balance::select("saldo")
        ->orderBy("id", "desc")
        ->limit(1)
        ->get();

        $transaction=new Balance;
        $transaction->fecha=date("y-m-d");
        $transaction->descrip=$empresa;
        $transaction->importe=$precioAccion*$cantidad;
        $transaction->saldo=$lastSaldo[0]["saldo"]-($precioAccion*$cantidad);
        $transaction->save();


        $vista = view("compraAccion", compact("empresa","cantidad", "precioAccion"))->render();

        return response()->json(array("success"=> true, "view" => $vista));
}
}
