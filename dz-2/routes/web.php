<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [\App\Http\Controllers\WelcomePageController::class, 'index'])
    ->name('welcome');

Route::get('/auth', [\App\Http\Controllers\AuthController::class, 'index'])->name('auth');

Route::group([
    'prefix' => '/news',
    'as' => '/news',
], function() {
    Route::get('/', [\App\Http\Controllers\NewsController::class, 'index'])
        ->name('');

    Route::get('/categories', [\App\Http\Controllers\NewsCategoriesController::class, 'index'])
        ->name('::categories');
});
