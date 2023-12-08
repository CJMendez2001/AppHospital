<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicoController;
use App\Models\Medico;
use App\Http\Controllers\ConsultaController;
use App\Models\Consulta;
use App\Http\Controllers\AdminUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('/departamentos','App\Http\Controllers\DepartamentoController');
Route::resource('/especialidads','App\Http\Controllers\EspecialidadController');
Route::resource('/generos','App\Http\Controllers\GeneroController');
Route::resource('/medico','App\Http\Controllers\MedicoController');
Route::resource('/consulta','App\Http\Controllers\ConsultaController');
Route::get('/admin/indexp', [AdminUserController::class, 'listUsers']);


Route::get('/medico/create',[MedicoController::class, 'create']);
Route::get('/consultas', [ConsultaController::class, 'index'])->name('consultas.index');
Route::get('/consultas/create', 'App\Http\Controllers\ConsultaController@create')->name('consultas.create');
Route::post('/consultas', [ConsultaController::class, 'store'])->name('consultas.store');





Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/home', [HomeController::class, 'redirect'])->name('home.redirect');
});
