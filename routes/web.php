<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SleutelController;

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
Route::middleware(['auth'])->group(function () {
// Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Songs Routes
    Route::get('Talentensleutel/create', [SleutelController::class, 'create'])->name('Talentensleutel.create');
    Route::get('Talentensleutel/{index}/edit', [SleutelController::class, 'edit'])->name('Talentensleutel.edit');
    Route::put('Talentensleutel/{Talentensleutel}', [SleutelController::class, 'update'])->name('Talentensleutel.update');
    Route::post('Talentensleutel', [SleutelController::class, 'store'])->name('Talentensleutel.store');
    Route::delete('Talentensleutel/{Talentensleutel}', [SleutelController::class, 'destroy'])->name('Talentensleutel.destroy');


}
);
require __DIR__.'/auth.php';
