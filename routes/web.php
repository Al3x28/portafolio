<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/descargar-cv', function () {
    $path = public_path('documents/Curriculum-Vitae-Alejandro-Girardi.pdf');

    if (!file_exists($path)) {
        abort(404, 'CV no encontrado');
    }

    return response()->download($path, 'Curriculum Vitae Alejandro Girardi.pdf');
})->name('download.cv');

// Contact form route with rate limiting (5 requests per minute)
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store')
    ->middleware('throttle:5,1');