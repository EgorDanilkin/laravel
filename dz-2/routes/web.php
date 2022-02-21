<?php

use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;

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
], function () {
    Route::get('/{id}', [\App\Http\Controllers\NewsController::class, 'index'])
        ->where('id', '[0-9]+')
        ->name('');

    Route::get('/categories', [\App\Http\Controllers\NewsCategoriesController::class, 'index'])
        ->name('::categories');

    Route::get('/category/{title}', [\App\Http\Controllers\NewsCategoryController::class, 'index'])
        ->name('::category');
});

Route::group([
    'prefix' => '/admin',
    'as' => 'admin::',
    'middleware' => ['auth', 'admin'],
], function () {

    Route::group([
        'prefix' => '/category',
        'as' => 'category',
    ], function () {

        Route::get('', [AdminCategoryController::class, 'index'])
            ->name('::show');

        Route::post('', [AdminCategoryController::class, 'create'])
            ->name('::create');
    });

    Route::group([
        'prefix' => '/news',
        'as' => 'news',
    ], function () {

        Route::get('/', [AdminNewsController::class, 'index'])
            ->name('');

        Route::get('/create', [AdminNewsController::class, 'create'])
            ->name('::create');

        Route::post('/store', [AdminNewsController::class, 'store'])
            ->name('::store');

        Route::get('/edit/{news}', [AdminNewsController::class, 'edit'])
            ->name('::edit');

        Route::post('/update/{news}', [AdminNewsController::class, 'update'])
            ->name('::update');

        Route::get('/show/{news}', [AdminNewsController::class, 'show'])
            ->name('::show');

        Route::get('/destroy/{news}', [AdminNewsController::class, 'destroy'])
            ->name('::destroy');
    });

    Route::group([
        'prefix' => 'profile',
        'as' => 'profile',
    ], function () {
        Route::get('/', [AdminProfileController::class, 'index'])
            ->name('');

        Route::get('/show/{user}', [AdminProfileController::class, 'show'])
            ->name('::show');

        Route::get('/create', [AdminProfileController::class, 'create'])
            ->name('::create');

        Route::post('/store', [AdminProfileController::class, 'store'])
            ->name('::store');

        Route::get('/edit/{user}', [AdminProfileController::class, 'edit'])
            ->name('::edit');

        Route::post('/update/{user}', [AdminProfileController::class, 'update'])
            ->name('::update');

        Route::get('/destroy/{user}', [AdminProfileController::class, 'destroy'])
            ->name('::destroy');
    });

    Route::get('/parser', [ParserController::class, 'index'])
        ->name('parser');

});

Route::group([
    'prefix' => 'social',
    'as' => 'social::',
], function () {

    Route::group([
        'prefix' => 'vk',
        'as' => 'vk::',
    ], function () {
        Route::get('/login', [SocialController::class, 'loginVk'])
            ->name('login');

        Route::get('/response', [SocialController::class, 'responseVk'])
            ->name('response');
    });

    Route::group([
        'prefix' => 'facebook',
        'as' => 'facebook::',
    ], function () {
        Route::get('/login', [SocialController::class, 'loginFacebook'])
            ->name('login');

        Route::get('/response', [SocialController::class, 'responseFacebook'])
            ->name('response');
    });
});



Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
