<?php

namespace App\Http\Controllers;

use App\Models\Ranting;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::with('ranting')->get();
        return view('pengurus.index', ['pengurus' => $pengurus]);    
    }

    public function create() 
    {
        $ranting = Ranting::select('id', 'name');
        return view('pengurus.create', ['ranting' => $ranting]);
    }
}
