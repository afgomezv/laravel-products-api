<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailable;

Route::get('/', HomeController::class)->name('home');
Route::resource('cursos', CursoController::class);
Route::view('nosotros', 'nosotros')->name('about');

Route::resource('contactanos', ContactController::class);






