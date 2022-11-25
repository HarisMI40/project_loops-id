<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Langganan;

class HomeController extends Controller
{
    public function index(){
        $langganan = Langganan::all();
        $warna = ['blue', 'orange', 'green', 'yellow'];
        // dd($langganan);
        return view("Home", ['langganan' => $langganan, 'warna' => $warna, 'counter' => 0]);
    }
}
