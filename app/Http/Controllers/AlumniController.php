<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::with('ranting')->get();
        return view('alumni.index', ['alumni' => $alumni]);    
    }
}
