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
    return view('home');
});
Route::get('parte3', function () {
    return view('parte3');
})->name('part2');
Route::get('parte4', function () {
    return view('parte4');
})->name('part3');
Route::get('parte5', function () {
    return view('parte5');
})->name('part4');
