<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

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

        $vista = view("serviciosForm", compact("service","number", "money"))->render();

        return response()->json(array("success"=> true, "view" => $vista));
}
}


