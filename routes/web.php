<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\RepresentationController;
use App\Http\Controllers\ReservationController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/artist', [ArtistController::class, 'index']) ->name('artist_index');
Route::get('/artist/{id}', [ArtistController::class,'show'])->where('id','[0-9]+')->name('artist_show');
Route::get('/artist/edit/{id}', [ArtistController::class, 'edit'])->where('id', '[0-9]+')->name('artist_edit');
Route::put('/artist/{id}', [ArtistController::class, 'update'])->where('id', '[0-9]+')->name('artist_update');
Route::delete('/artist/destroy/{id}',[ArtistController::class,'destroy'])->where('id','[0-9]+')->name('artist_destroy');

Route::get('/locality', [LocalityController::class, 'index']) ->name('locality_index');
Route::get('/locality/{id}', [LocalityController::class,'show'])->where('id','[0-9]+')->name('locality_show');
Route::get('/locality/edit/{id}', [LocalityController::class, 'edit'])->where('id', '[0-9]+')->name('locality_edit');
Route::put('/locality/{id}', [LocalityController::class, 'update'])->where('id', '[0-9]+')->name('locality_update');
Route::delete('/locality/destroy/{id}',[LocalityController::class,'destroy'])->where('id','[0-9]+')->name('locality_destroy');


Route::get('/location', [LocationController::class, 'index']) ->name('location_index');
Route::get('/location/{id}', [LocationController::class,'show'])->where('id','[0-9]+')->name('location_show');

Route::get('/representation', [RepresentationController::class, 'index']) ->name('representation_index');
Route::get('/representation/{id}', [RepresentationController::class,'show'])->where('id','[0-9]+')->name('representation_show');

Route::get('/reservation', [ReservationController::class, 'index']) ->name('reservation_index');
Route::get('/reservation/{id}', [ReservationController::class,'show'])->where('id','[0-9]+')->name('reservation_show');
Route::get('/reservation/edit/{id}', [ReservationController::class, 'edit'])->where('id', '[0-9]+')->name('reservation_edit');
Route::put('/reservation/{id}', [ReservationController::class, 'update'])->where('id', '[0-9]+')->name('reservation_update');
Route::delete('/reservation/destroy/{id}',[ReservationController::class,'destroy'])->where('id','[0-9]+')->name('reservation_destroy');


Route::get('/role', [RoleController::class, 'index']) ->name('role_index');
Route::get('/role/{id}', [RoleController::class,'show'])->where('id','[0-9]+')->name('role_show');
Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->where('id', '[0-9]+')->name('role_edit');
Route::put('/role/{id}', [RoleController::class, 'update'])->where('id', '[0-9]+')->name('role_update');
    Route::delete('/role/destroy/{id}',[RoleController::class,'destroy'])->where('id','[0-9]+')->name('role_destroy');

Route::get('/type', [TypeController::class, 'index']) ->name('type_index');
Route::get('/type/{id}', [TypeController::class,'show'])->where('id','[0-9]+')->name('type_show');
Route::get('/type/edit/{id}', [TypeController::class, 'edit'])->where('id', '[0-9]+')->name('type_edit');
Route::put('/type/{id}', [TypeController::class, 'update'])->where('id', '[0-9]+')->name('type_update');
Route::delete('/type/destroy/{id}',[TypeController::class,'destroy'])->where('id','[0-9]+')->name('type_destroy');

Route::get('/show', [ShowController::class, 'index']) ->name('show_index');
Route::get('/show/{id}', [ShowController::class,'show'])->where('id','[0-9]+')->name('show_show');