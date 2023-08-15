<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentdetailController;

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
// Route::get('index', [RegistrationController::class, 'index']);
// Route::post('insert', [RegistrationController::class, 'store']);
// Route::put('update/{registration}', [RegistrationController::class, 'edit']);
// Route::delete('delete/{id}', [RegistrationController::class, 'destroy']);





// Route::get('index', [StudentdetailController::class, 'index']);
// Route::post('store', [StudentdetailController::class, 'store']);
// Route::put('update/{student}', [StudentdetailController::class, 'edit']);
// Route::delete('delete/{id}', [StudentdetailController::class, 'destroy']);

Route::resource('studentdetails',StudentdetailController::class);


// Route::controller(StudentdetailController::class)->group(function () {
//     Route::get('/index', 'index');
//     Route::post('/store', 'store');
//     Route::post('/update/{student}', 'edit');
//     Route::delete('/destroy/{id}', 'destroy');
// });






















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
