<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/', [PostController::class,'home'])->name('home');


// Route::view('admin/dashboard', 'admin.dashboard')
//     ->middleware(['auth', 'verified','admin'])
//     ->name('admin.dashboard');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [PostController::class, 'index'])->name('admin.dashboard');
    Route::get('post', [PostController::class, 'index'])->name('admin.post.index');
    Route::get('/create', [PostController::class, 'create'])->name('admin.post.create');
    Route::post('/store', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('/view/{post}', [PostController::class, 'show'])->name('admin.post.view');
    Route::get('/edit/{post}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::put('/upadate/{post}', [PostController::class,'update'])->name('admin.post.update');
    Route::delete('/delete/{post}', [PostController::class,'destroy'])->name('admin.post.delete');
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
