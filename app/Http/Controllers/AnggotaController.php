<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::with('ranting')->get();
        return view('anggota.index', ['anggota' => $anggota]);    
    }
}
