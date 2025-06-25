<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\CheckRole;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Psy\VersionUpdater\Checker;

Route::get('/', function () {
    return view('welcome');
})->name('website');

Route::get('dashboard', function () {
    $cases = Report::latest()->get();

    return view('dashboard', [
        'cases' => $cases,
    ]);
})->name('dashboard')->middleware('auth', CheckRole::class . ':admin, investigator');


Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile');
    Route::get('users', [ProfileController::class, 'index'])->name('users');
    Route::get('add-user', [ProfileController::class, 'create'])->name('add-user');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('create-user', [ProfileController::class, 'store'])->name('create-user');
    Route::delete('delete-user/{user}', [ProfileController::class, 'deleteUser'])->name('delete-user');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(ReportController::class)->group(function () {
    Route::get('report', 'create')->name('report');
    Route::get('reported-cases', 'index')->name('cases')->middleware(CheckRole::class . ':admin, investigator');
    Route::post('submit', 'store')->name('submit');
});

Route::controller(ReportController::class)->group(function () {
    Route::get('case-details/{report}', 'show')->name('case-details');
    Route::get('download/{report}', 'download')->name('evidence.download');
    Route::post('assign-status-update/{report}', 'investigation')->name('investigator.status.update')->middleware(CheckRole::class . ':admin, investigator');
    Route::get('delete-case/{report}', 'destroy')->name('case.drop')->middleware(CheckRole::class . ':admin');
    Route::post('status-update/{report}', 'statusUpdate')->name('status.update')->middleware(CheckRole::class . ':admin');
})->middleware('auth');


require __DIR__ . '/auth.php';
