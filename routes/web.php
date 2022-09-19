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


foreach ([
  'app-bar',
  'banner',
  'button',
  'card',
  'checkbox',
  'chip',
  'data-table',
  'icon',
  'icon-button',
  'tab-bar',
  'tooltip',
  'typography'
] as $componentName) {
  Route::get('components/' . $componentName, function () use ($componentName) {
    return view('pages.' . $componentName);
  })->name('pages.' . $componentName);
}

foreach ([
  'basic',
  'short',
  'short-collapsed',
  'fixed',
  'dense',
  'prominent'
] as $componentName) {
  Route::get('app-bar/iframe/' . $componentName, function () use ($componentName) {
    return view('pages.app-bar-iframe.' . $componentName);
  })->name('pages.app-bar.iframe.' . $componentName);
}

Route::get('banner/iframe/fixed', function () {
  return view('pages.banner-iframe.fixed');
})->name('pages.banner.iframe.fixed');

Route::get('components/fab', function () {
  return view('pages.fab');
})->name('pages.floating-action-button');