<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;

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




# Appointment Routes Middleware
Route::prefix('appointment')->group(function () {
    Route::get('/', [AppointmentController::class, 'appointmentPage'])->name('appointment.index');
    Route::get('records',  [AppointmentController::class, 'appointmentRecords'])->name('appointment.records');
    Route::post('register', [AppointmentController::class, 'register'])->name('appointment.register');
    Route::get('success',  [AppointmentController::class, 'successfulPage'])->name('appointment.success');
    Route::get('accept/{patient}',  [AppointmentController::class, 'accept'])->name('appointment.accept');
    Route::get('cancel/{appointment}',  [AppointmentController::class, 'cancel'])->name('appointment.cancel');
    Route::get('remove/{appointment}',  [AppointmentController::class, 'remove'])->name('appointment.remove');
    Route::get('show/{patient}',  [AppointmentController::class, 'show'])->name('appointment.info');
});

Route::prefix('patient')->group(function () {
    Route::get('/', [PatientController::class, 'index'])->name('patient.index');
});

# Patient Routes Middleware
// Route::middleware(['auth', 'auth.patient'])->group(function() {
//     Route::prefix('appointment')->group(function () {

//         Route::get('records',  [AppointmentController::class, 'appointmentRecords'])->name('appointment.records');

//     });
// });

require __DIR__ . '/auth.php';
