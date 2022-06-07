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
    return view('tes');
});

Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home1', function () {
    return view ('member.main.index');
});
Route::get('/sosial', function () {
    return view ('member.sosial.index');
});
Route::get('/politik', function () {
    return view ('member.politik.index');
});
Route::get('/hukum', function () {
    return view ('member.hukum.index');
});
Route::get('/ekonomi', function () {
    return view ('member.ekonomi.index');
});
Route::get('/ragam', function () {
    return view ('member.ragam.index');
});
Route::get('/luarnegeri', function () {
    return view ('member.luar-negeri.index');
});
Route::get('/iptek', function () {
    return view ('member.iptek.index');
});
Route::get('/gayahidup', function () {
    return view ('member.gaya-hidup.index');
});
Route::get('/bola', function () {
    return view ('member.bola.index');
});
Route::get('berita', function () {
    return view ('member.berita');
});



Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function() {
    Route::group(['middleware' => ['auth']], function() {
        Route::resource('dashboard', DashboardController::class);
        Route::resource('news', NewsController::class);
        Route::resource('curhat-rakyat', CurhatRakyatController::class);
        Route::resource('covid-19', CovidController::class);
        Route::resource('iklan-baris', LineAdvertisementController::class);
        Route::resource('iklan-gambar', ImageAdvertisementController::class);
        Route::resource('poling', PolingController::class);
        Route::resource('video', VideoController::class);
    });
});



