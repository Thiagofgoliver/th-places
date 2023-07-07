<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndicacaoController;


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

Route::get('/teste', [IndicacaoController::class, 'store'] );



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

    Route::get('/principal', function () {
        return view('telaprincipal');
    })->name( 'principal');

    // rota indicacao-store
    Route::post('/indicacao', 'IndicacaoController@store');

    
    //rota indicacao-index 
    Route::get('/indicacao', 'IndicacaoController@index');




    //rota indicacao-update
    Route::put('/indicacao/{id}', 'IndicacaoController@update');



    //rota indicacao-delete 

    Route::delete('/indicacao/{id}', 'IndicacaoController@destroy');



    //rota indicacao-store
    Route::post('/indicacao', [IndicacaoController::class, 'store'])->name('indicacao.store');



    //rota indicao-show
    Route::get('/indicacao/{id}', 'IndicacaoController@show')->name('indicacao.show');




});
