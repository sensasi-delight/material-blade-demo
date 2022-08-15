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
    return view('index');
});

Route::get('components/button', function () {
    return view('pages.button');
})->name('pages.button');

Route::get('components/checkbox', function () {
  return view('pages.checkbox');
});

Route::get('components/icon', function () {
  return view('pages.icon');
})->name('pages.icon');

Route::get('components/icon-button', function () {
  return view('pages.icon-button');
})->name('pages.icon-button');