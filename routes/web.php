<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';




Route::get('/inscrire', [EtudiantController::class, 'showForm'])->name('inscrire.form');
Route::post('/inscrire', [EtudiantController::class, 'store'])->name('inscrire.submit');


Route::get('/liste', [EtudiantController::class, 'index'])->name('etudiants.index');

Route::get('/delete', [EtudiantController::class, 'index'])->name('etudiants.index');
Route::post('/delete/{id}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');

Route::get('/detail', [EtudiantController::class, 'index'])->name('detail.index');
Route::get('/detail/{id}', [EtudiantController::class, 'show'])->name('detail.show');

Route::get('/carte', [EtudiantController::class, 'index'])->name('carte.index');
Route::get('/carte/{id}', [EtudiantController::class, 'sho'])->name('carte.show');