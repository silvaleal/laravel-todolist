<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', [ItemController::class, 'index'])->name('index');
Route::any('/create', [ItemController::class, 'create'])->name('create');
Route::any('/delete/{id}', [ItemController::class, 'delete'])->name('delete');
Route::any('/update/{id}', [ItemController::class, 'update'])->name('update');
Route::redirect('/about', '/')->name('about');