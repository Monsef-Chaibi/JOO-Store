<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

    Route::get('/Tenues-De-Match', [ProductController::class, 'Product_Page']);
    Route::get('/Mode', [ProductController::class, 'Mode_Page']);
    Route::get('/Product-Details', [ProductController::class, 'Product_Details_Page']);
    Route::post('/Product-To-Cart', [ProductController::class, 'Flasher']);


