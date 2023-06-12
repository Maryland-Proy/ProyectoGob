<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectosController;

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
    return view('auth.login');
});

/*Route::get('/Proyecto', function () {
    return view('Proyecto.index');
});
Route::get('Proyecto/create',[ProyectosController::class,'create']);*/
Route::get('Proyecto/pdf', [ProyectosController::class, 'pdf'] )->name('proyecto.pdf');
Route::resource('Proyecto',ProyectosController::class)->middleware('auth');

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('Proyecto/pdf', [ProyectosController::class, 'pdf'] )->name('proyecto.pdf');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [ProyectosController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/', [ProyectosController::class, 'index'])->name('home');

});
