<?php

use App\Http\Controllers\FruitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(FruitController::class)->group(function() {
    // Menampilkan data
    Route::get('/fruit', 'index')->name('fruits.index');

    // Menambah data
    Route::get('/fruit/create', 'create')->name('fruits.create');
    // "create" menyesuaikan dengan nama function

    Route::post('/fruit/store', 'store')->name('fruits.store');
    Route::get('/fruit/show/{id}', 'show')->name('fruits.show');

    // Edit Data
    Route::get('/fruit/edit/{id}', 'edit')->name('fruits.edit');
    Route::put('/fruit/update/{id}', 'update')->name('fruits.update');

    // Hapus Data
    Route::get('/fruit/delete/{id}', 'destroy')->name('fruits.destroy');
});
