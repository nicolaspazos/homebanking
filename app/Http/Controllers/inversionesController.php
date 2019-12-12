<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inversion;

class inversionesController extends Controller
{
    public function index()
    {   $inversion = Inversion::orderBy("id", "DESC")->get();
        return view("inversiones", compact("inversion"));
    }
}
