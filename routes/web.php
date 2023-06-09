<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/songs', [\App\Http\Controllers\SongInformationController::class, 'index'])->name("songs");
Route::get('/songs/{id}', [\App\Http\Controllers\SongInformationController::class, 'specificSong'])->name("specific-song");

Route::get('/pedals', [\App\Http\Controllers\PedalInformationController::class, 'index'])->name("pedals");
Route::get('/pedals/{id}', [\App\Http\Controllers\PedalInformationController::class, 'specificPedal'])->name("specific-pedal");

Route::get('/pedals-songs/{id}', [\App\Http\Controllers\PedalsSongsController::class, 'specificPedal'])->name("specific-pedal-song");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
