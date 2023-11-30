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
    return view('/talentsleutel/home');
});

Route::get('/questionnaire', function () {
    return view('/talentsleutel/questionnaire');
});

Route::get('/gesprek-inplannen', function () {
    return view('/talentsleutel/calendar');
});

Route::get('/resultaten', function () {
    return view('/talentsleutel/resultaten');
});

Route::get('/raporten', function () {
    return view('/talentsleutel/raporten');
});

Route::get('/contact', function () {
    return view('/talentsleutel/contact');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

}
);
require __DIR__.'/auth.php';
