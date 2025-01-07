<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Middleware\VerifyCsrfToken;

Route::controller(ProductoController::class)->group(function(){
    Route::get('api/products', 'index'); ;
    Route::post('api/products', 'create');

    Route::get('api/products/{id}', 'show');
    Route::put('api/products/{id}', 'update');
    Route::delete('api/products/{id}', 'destroy');
})->middleware(VerifyCsrfToken::class);






