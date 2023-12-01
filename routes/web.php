<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
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

// Home page
Route::get('/', function () {
    return view('/talentsleutel/home');
});

// Questionnaire routes
Route::middleware('auth', 'role:user')->group(
    function () {
        Route::get('/questionnaire', [QuestionController::class, 'index']);
        Route::post('/questionnaire', [QuestionController::class, 'store']);
    }
);

// Load question
Route::get('/load-question/{questionId}', [QuestionController::class, 'loadQuestionById']);


// Planning page
Route::get('/gesprek-inplannen', function () {
    return view('/talentsleutel/calendar');
});

// Result page
Route::get('/resultaten', function () {
    return view('/talentsleutel/resultaten');
});

// Raport page
Route::get('/raporten', function () {
    return view('/talentsleutel/raporten');
});

// Contact page
Route::get('/contact', function () {
    return view('/talentsleutel/contact');
});

// Dasboard page (not used (yet))
Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

// User profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

}
);
require __DIR__.'/auth.php';
