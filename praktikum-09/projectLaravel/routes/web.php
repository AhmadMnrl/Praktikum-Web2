<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;


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
    return view('welcome');
});

Route::get('/nilai', function () {
    return view('nilai.nilai');
});

Route::get('/pasien', function () {
    return view('pasien.pasien');
});

Route::get('/form',[FormController::class, 'index']);
Route::post('/hasil',[FormController::class, 'hasil']);

Route::get('/formskill',[SkillController::class, 'index']);
Route::post('/skillhasil',[SkillController::class, 'hasil']);