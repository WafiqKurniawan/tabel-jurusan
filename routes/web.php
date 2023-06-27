<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenController;
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

Route::resource('mapel', MapelController::class);
Route::get('/home', [ContenController::class, 'index']);
Route::get('/contak', [ContenController::class, 'contak']);


Route::middleware(['auth:sanctum',])->get('/dashboard', function () {   
    return view('dashbord');
})->name('dashboard');
Route::resource('jurusan',  jurusanController::class);