<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
//     return view('coba');
// });

Auth::routes();
// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/',[homeController::class, 'home'])->name('home');
// Route::get('/home',[homeController::class, 'home'])->name('index');
Route::get('/tagsub/{id}',[homeController::class, 'tagsub'])->name('tagsub');
Route::get('/page',[homeController::class, 'page'])->name('page');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function() {
    Route::group(['middleware' => ['role:admin','auth']], function() {
        Route::resource('dashboard', DashboardController::class);
        Route::resource('news', NewsController::class);
        Route::resource('curhat-rakyat', CurhatRakyatController::class);
        Route::resource('covid-19', CovidController::class);
        Route::resource('iklan-baris', LineAdvertisementController::class);
        Route::resource('iklan-gambar', ImageAdvertisementController::class);
        Route::resource('poling', PolingController::class);
        Route::resource('video', VideoController::class);

        Route::group([
            'prefix' => 'setting',
            'namespace' => 'Setting',
            'as' => 'setting.'
        ], function(){
            Route::resource('menu', MenuController::class);
            Route::resource('tag', TagController::class);
            Route::resource('posisi-iklan', PosisiIklanController::class);
            Route::resource('tag-sub', TagSubController::class);
            Route::resource('register', RegisterController::class);
            Route::resource('member', MemberController::class);
        });

        Route::group([
            'prefix' => 'tentangkami',
            'namespace' => 'TentangKami',
            'as' => 'tentangkami.'
        ], function(){
            Route::resource('kontak', KontakController::class);
            Route::resource('tentang-kami', TentangKamiController::class);        
            Route::resource('redaksi', RedaksiController::class);
            Route::resource('disclaimer', DisclaimerController::class);
            Route::resource('pedoman', PedomanController::class);
        });
        
 
    });
});

Route::group([
    'prefix' => 'editor',
    'namespace' => 'Editor',
    'as' => 'editor.'
], function() {
    Route::group(['middleware' => ['role:editor','auth']], function() {
        Route::resource('dashboard', DashboardController::class);
        Route::resource('news', NewsController::class);
        Route::resource('curhat-rakyat', CurhatRakyatController::class);
        Route::resource('covid-19', CovidController::class);
        Route::resource('iklan-baris', LineAdvertisementController::class);
        Route::resource('iklan-gambar', ImageAdvertisementController::class);
        Route::resource('poling', PolingController::class);
        Route::resource('video', VideoController::class);

        Route::group([
            'prefix' => 'setting',
            'namespace' => 'Setting',
            'as' => 'setting.'
        ], function(){
            Route::resource('menu', MenuController::class);
            Route::resource('tag', TagController::class);
            Route::resource('register', RegisterController::class);
            Route::resource('posisi-iklan', PosisiIklanController::class);
            Route::resource('tag-sub', TagSubController::class);
            Route::resource('member', MemberController::class);
        });
        
 
    });
});


// Route::group([
//     'prefix' => 'member',
//     'namespace' => 'Member',
//     'as' => 'member.'
// ], function() {
//     Route::group(['middleware' => ['auth']], function() {
        
//     });

// });


