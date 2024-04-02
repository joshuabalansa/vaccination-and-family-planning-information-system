<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


/**
 *  Appointment Routes
 */
Route::get('appointment', [AppointmentController::class, 'index'])->name('appointment.index');

Route::middleware(['auth', 'auth.admin'])->group(function() {
    Route::prefix('appointment')->group(function () {
        Route::post('/register', [AppointmentController::class, 'register'])->name('appointment.register');
        Route::get('/records',  [AppointmentController::class, 'appointmentRecords'])->name('appointment.records');
        Route::get('/success',  [AppointmentController::class, 'successfulPage'])->name('appointment.success');
    });
});

Route::middleware(['auth', 'auth.patient'])->group(function() {
    Route::get('/patient', function() {
        return 1;
    })->name('patient');
});



require __DIR__.'/auth.php';
