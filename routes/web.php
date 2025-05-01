<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('add-user', [ProfileController::class, 'create'])->name('add-user');
    Route::post('create-user', [ProfileController::class, 'store'])->name('create-user');
    Route::delete('delete-user/{user}', [ProfileController::class, 'deleteUser'])->name('delete-user');

    Route::get('users', [ProfileController::class, 'index'])->name('users');
});

Route::controller(RegistrationController::class)->group(function () {
    Route::get('signup', 'create')->name('signup');
    Route::post('create-account', 'store')->name('create-account');
});

Route::controller(ReportController::class)->group(function () {
    Route::get('report', 'create')->name('report');
    Route::get('cases', 'index')->name('cases');
    Route::post('submit', 'store')->name('submit');
});

Route::controller(ReportController::class)->group(function () {
    Route::get('case-details/{report}', 'show')->name('case-details');
})->middleware('auth');


require __DIR__ . '/auth.php';
