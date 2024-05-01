<?php

use Illuminate\Support\Facades\Route;


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('data_containers', DataController::class);

Route::get('{any?}', fn () => view('app'))->where('any', '.*');