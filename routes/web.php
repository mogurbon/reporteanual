<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ReportController;
#use Illuminate\Mail;
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

/*Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

#Route::get('/user', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('user.index');

Route::get('/dashboard', [ReportController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/report/create', [ReportController::class, 'create'])->middleware(['auth', 'verified'])->name('report.create');
Route::post('/report/store', [ReportController::class, 'store'])->middleware(['auth', 'verified'])->name('report.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/send-mail', function () {
    \Mail::raw('Esto es una prueba', function ($message) {
        $message->to('example@example.com')->subject('Correo de Prueba');
    });

    return 'Correo enviado';
});



require __DIR__.'/auth.php';
