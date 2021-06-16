<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaloriController extends Controller
{
    public function index()
    {
        $hitung_kalori = \App\Models\kalori::all();
        return view ('hasil', ['hitung_kalori' => $hitung_kalori]);
    }

    public function tambah(Request $request)
    {
        DB::table('kalori')->insert([
            'menu' => $request->menu,
            'satuan' => $request->satuan,
            'jumlah' => $request->jumlah
        ]);
        
        return redirect('/hasil');
    }

}

