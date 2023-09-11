<?php

namespace App\Http\Controllers;

use App\Models\Ranting;
use Illuminate\Http\Request;

class RantingController extends Controller
{
    public function index() 
    {
        $ranting = Ranting::all();
        return view('ranting.index', ['ranting' => $ranting]);
    }
}
