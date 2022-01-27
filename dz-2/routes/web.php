<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

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


Route::get('/', [\App\Http\Controllers\WelcomePageController::class, 'index'])
    ->name('welcome');

Route::get('/auth', [\App\Http\Controllers\AuthController::class, 'index'])->name('auth');

Route::group([
    'prefix' => '/news',
    'as' => 'news',
], function() {
    Route::get('/{id}', [\App\Http\Controllers\NewsController::class, 'index'])
        ->where('id', '[0-9]+')
        ->name('');

    Route::get('/categories', [\App\Http\Controllers\NewsCategoriesController::class, 'index'])
        ->name('::categories');

    Route::get('/category/{title}', [\App\Http\Controllers\NewsCategoryController::class, 'index'])
        ->name('::category');
});

Route::get('/admin/category', [AdminCategoryController::class, 'index'])
    ->name('admin::category::show');

Route::post('/admin/category', [AdminCategoryController::class, 'create'])
    ->name('admin::category::create');
