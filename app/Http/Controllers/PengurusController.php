<?php

namespace App\Http\Controllers;

use App\Models\Ranting;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PengurusCreateRequest;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('pengurus.index', ['pengurus' => $pengurus]);    
    }

    public function create() 
    {
        return view('pengurus.create');
    }

        public function store(PengurusCreateRequest $request) //
        {
            $newName = '-';
    
            if($request->file('photo')){
                $extension = $request->file('photo')->getClientOriginalExtension();
                $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
                $request->file('photo')->storeAs('photo', $newName);
            }
            
            $request['images'] = $newName;
            $pengurus = Pengurus::create($request->all());
    
            if ($pengurus) {
                Session::flash('status', 'Success');
                Session::flash('message', 'Berhasil Menambahkan Data Pengurus');
            }
    
            return redirect('/pengurus');
        }
}
