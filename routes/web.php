<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\CitaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/clinicas', [ClinicaController::class, 'index'])->name('clinicas.index');
Route::get('/clinicas/search', [ClinicaController::class, 'search'])->name('clinicas.search');
Route::get('/clinicas/{clinica}/medicos', [MedicoController::class, 'showClinicaMedicos'])->name('clinicas.medicos');
Route::get('/citas/create/{medico_id}/{clinica_id}/{especialidad_id}', [CitaController::class, 'create'])->name('citas.create');
Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');
Route::get('/citas', [CitaController::class, 'index'])->name('citas.index');


Route::get('/citas/reagendar/{cita}', [CitaController::class, 'reagendar'])->name('citas.reagendar');
Route::put('/citas/{cita}', [CitaController::class, 'update'])->name('citas.update');

Route::get('/citas/cancelar/{cita}', [CitaController::class, 'cancelar'])->name('citas.cancelar');
Route::get('/citas/{cita}/cancelar', [CitaController::class, 'showCancel'])->name('citas.showCancel');

Route::delete('/citas/{cita}', [CitaController::class, 'destroy'])->name('citas.destroy');

require __DIR__.'/auth.php';
