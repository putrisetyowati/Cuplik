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
    return view('admin.dashboard.index');
});


Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function() {
    // Route::group(['middleware' => ['auth', 'role:admin']], function() {
        Route::resource('dashboard', DashboardController::class);
        Route::resource('news', NewsController::class);
        Route::resource('curhat-rakyat', CurhatRakyatController::class);
        Route::resource('covid-19', CovidController::class);
        Route::resource('iklan-baris', LineAdvertisementController::class);
        Route::resource('iklan-gambar', ImageAdvertisementController::class);
        Route::resource('poling', PolingController::class);
        Route::resource('video', VideoController::class);
    // });
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

