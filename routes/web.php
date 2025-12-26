<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/descargar-cv', function () {
    // Verifica primero qué archivos hay en la carpeta
    $directory = storage_path('app/public/documents/');
    
    // Lista todos los archivos PDF en esa carpeta
    $files = glob($directory . '*.pdf');
    
    // Si quieres ver qué archivos encuentra, descomenta la siguiente línea temporalmente
    // dd($files); 
    
    // Ruta exacta del archivo
    $path = storage_path('app/public/documents/Curriculum-Vitae-Alejandro-Girardi.pdf');
    
    // Verifica si el archivo existe
    if (!file_exists($path)) {
        // Muestra más información del error
        return response()->json([
            'error' => 'Archivo no encontrado',
            'ruta_buscada' => $path,
            'existe_directorio' => is_dir($directory),
            'archivos_en_carpeta' => $files
        ], 404);
    }
    
    return response()->download($path, 'Curriculum Vitae Alejandro Girardi.pdf');
})->name('download.cv');

// Contact form route with rate limiting (5 requests per minute)
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store')
    ->middleware('throttle:5,1');