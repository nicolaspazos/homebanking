<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Balance;

class servicesController extends Controller
{
    public function index()
    {
       {   $service = Service::orderBy("id", "DESC")->get();
        return view("servicios", compact("service"));
    }
    }


    public function serviciosForm(Request $request){
        $service = $request->get('service');
        $number = $request->get('number');
        $money = $request->get('money');

        $lastSaldo= Balance::select("saldo")
        ->orderBy("id", "desc")
        ->limit(1)
        ->get();

        $transaction=new Balance;
        $transaction->fecha=date("y-m-d");
        $transaction->descrip=$service;
        $transaction->importe=$money;
        $transaction->saldo=$lastSaldo[0]["saldo"]-$money;
        $transaction->save();


        $vista = view("serviciosForm", compact("service","number", "money"))->render();

        return response()->json(array("success"=> true, "view" => $vista));
}
}


