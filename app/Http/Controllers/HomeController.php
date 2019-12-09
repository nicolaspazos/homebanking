<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke($view=1)
    {$nombre = "Nico";
        if ($view == 1 ){
        return view("welcome", compact ("nombre"));
    } else{
        return "This view does not exist";
    }}
}
