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
    return "<h3> Эт главная </h3>
            <p>и тут что то есть</p>";
});

Route::get('/some', function () {
    return "<h3> а это не главная </h3>
            <p>и тут тоже что то есть</p>";
});
Route::get('/somepage', function () {
    return "<h3> и это тоже не главная </h3>
            <p>и тут есть список</p>
            <ul> список
                <li>1 элемент</li>
                <li>2 элемент</li>
            </ul>";
});

