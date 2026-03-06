<?php

use App\Http\Controllers\DemoDataController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/locale/{locale}', function (string $locale) {
    $supportedLocales = ['en', 'id'];

    abort_unless(in_array($locale, $supportedLocales, true), 404);

    session(['locale' => $locale]);

    return redirect()->back();
})->name('locale.switch');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/api/datatables/demos/default.php', [DemoDataController::class, 'datatableDefault']);
Route::get('/api', [DemoDataController::class, 'jsonFile']);

require __DIR__ . '/auth.php';
require __DIR__ . '/dynamic-menus.php';
require __DIR__ . '/website.php';
