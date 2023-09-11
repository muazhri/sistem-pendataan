<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::with('ranting')->get();
        return view('pengurus.index', ['pengurus' => $pengurus]);    
    }
}
