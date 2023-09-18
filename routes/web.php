<?php

use App\Models\Alumni;
use App\Models\Anggota;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RantingController;
use App\Http\Controllers\PengurusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/pengurus', [PengurusController::class, 'index']);
Route::get('/pengurus-create', [PengurusController::class, 'create']);
Route::post('/pengurus', [PengurusController::class,'store']);
Route::get('/pengurus-edit/{id}', [PengurusController::class,'edit']);
Route::put('/pengurus/{id}', [PengurusController::class,'update']);




Route::get('/ranting', [RantingController::class, 'index']);




Route::get('/alumni', [AlumniController::class, 'index']);




Route::get('/anggota', [AnggotaController::class, 'index']);





