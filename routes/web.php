<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk tampilan login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route untuk autentikasi login
Route::post('/login', [LoginController::class, 'login']);

// Jika Anda menggunakan Laravel Breeze, Jetstream, atau lainnya, login route bisa sudah otomatis ada.

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route untuk menghapus item
Route::delete('/items/{id}', [ItemController::class, 'destroy'])->name('items.destroy');

// Route untuk menghapus checkout
Route::delete('/checkouts/{id}', [CheckoutController::class, 'destroy'])->name('checkouts.destroy');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('items', ItemController::class);
    Route::resource('checkouts', CheckoutController::class);

    
    Route::get('/history', function () {
        $items = \App\Models\Item::all();
        $checkouts = \App\Models\Checkout::with('item')->get();
        return view('history.index', compact('items', 'checkouts'));
    })->name('history.index');
});
require __DIR__.'/auth.php';
