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

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/detail/{slug}', 'DetailController@index')
    ->name('detail');

Route::get('/browse', 'HomeController@browse')
    ->name('browse');

Route::get('/browse/search', 'HomeController@search')
    ->name('search');

Route::get('/category/{cities}', 'HomeController@cities')
    ->name('cities');

Route::get('/contact-us', 'HomeController@contact')
    ->name('contact');

Route::prefix('admin')->namespace('Admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('house-package', 'HousePackageController');
    Route::resource('gallery', 'GalleryController');
});

Auth::routes([
    'register' => false,
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
