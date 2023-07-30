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

Route::get('/', function () {
    $article = [
        'title' => 'this is article 1',
        'body' => 'article\'s body',
    ];
    return view('master', compact('article'));
});

Route::get('/articles/{article}', \App\Http\Livewire\Articles\Index::class);
