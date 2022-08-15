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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('components/button', function () {
    return view('pages.button');
});

Route::get('components/checkbox', function () {
  return view('pages.checkbox');
});

Route::get('components/icon', function () {
  return view('pages.icon');
});

Route::get('components/icon-button', function () {
  return view('pages.icon-button');
});