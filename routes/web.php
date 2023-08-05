<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Livewire\Home::class);

Route::get('/articles', \App\Http\Livewire\Articles\Index::class);
Route::get('auth/register', \App\Http\Livewire\Auth\Register::class);
Route::get('files/upload', \App\Http\Livewire\Layouts\Upload::class);
