<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/stu', [StudentController::class, 'index']);
Route::get('/input', [pro::class, 'edit'])->name('profile.edit');
