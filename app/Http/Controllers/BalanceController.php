<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balance;

class BalanceController extends Controller
{
    public function index()
    {   $balance = Balance::orderBy("id", "DESC")->get();
        return view("balance", compact("balance"));
    }
}
