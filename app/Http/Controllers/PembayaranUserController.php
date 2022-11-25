<?php

namespace App\Http\Controllers;
use App\Models\Berlangganan;
use Illuminate\Http\Request;

class PembayaranUserController extends Controller
{
    public function show($id){

    
        $pembayaran = Berlangganan::with('langganan')->where('id',$id)->first();
        return view("pembayaran", ['pembayaran' => $pembayaran]);
    }
}
