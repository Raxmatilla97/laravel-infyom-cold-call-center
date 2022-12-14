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
    return redirect()->route('login');
});

Route::get('/register', function () {
    return redirect()->route('login');
});

Auth::routes();


Route::prefix('admin')->group(function () {   

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('categories', App\Http\Controllers\CategoriesController::class);
    Route::resource('qongiroqQilganlars', App\Http\Controllers\QongiroqQilganlarController::class);


    Route::get('/kelmaganlar', [App\Http\Controllers\QongiroqQilganlarController::class, 'kelmaganlar_index'])->name('kelmaganlar');

    Route::get('/kelganlar', [App\Http\Controllers\QongiroqQilganlarController::class, 'kelganlar_index'])->name('kelganlar');

    Route::get('/telefon_qilinganlar', [App\Http\Controllers\QongiroqQilganlarController::class, 'telefon_qilinganlar_index'])->name('telefon_qilinganlar');

    Route::get('/telefon_qilinmaganlar', [App\Http\Controllers\QongiroqQilganlarController::class, 'telefon_qilinmaganlar_index'])->name('telefon_qilinmaganlar');


});
