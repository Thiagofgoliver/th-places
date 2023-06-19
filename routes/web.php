<?php

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
    return view('apresentacao');
});


Route::get('/termos', function () {
    return view('termosecondicoes');
})->name( 'termos');


Route::get('/politica', function () {
    return view('politicadeprivacidade');
})->name( 'politica');
Route::get('/principal', function () {
    return view('telaprincipal');
})->name( 'principal');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/principal', function () {
    //     return view('telaprincipal');
    // })->name( 'principal');
});
