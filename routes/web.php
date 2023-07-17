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

Route::post('/store', [IndicacaoController::class, 'store'] )->name('store');



Route::get('/termos', function () {
    return view('termosecondicoes');
})->name( 'termos');


Route::get('/politica', function () {
    return view('politicadeprivacidade');
})->name( 'politica');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/principal',[IndicacaoController::class, 'read'] )->name( 'principal');

    Route::get('/editar/{id}',[IndicacaoController::class, 'editar'] )->name( 'editar');


    
// rota minhas indicacao
    Route::get('/minhasindicacao', [IndicacaoController::class , 'indicacaouser'] )->name( 'indicacao');

// rota update

        
   


    

    // rota indicacao-store
    Route::post('/indicacao', 'IndicacaoController@store');

    
    //rota indicacao-index 
    Route::get('/indicacao', 'IndicacaoController@index');




   
    //Rotas para o UPDATE - U do CRUD - uma rota para o formulário de atualização
    Route::get('/editar/{id}', [indicacaoController::class, 'editar'] )->name('editar');

    //Rota para processar a atualização
    Route::put('/atualiza', [indicacaoController::class, 'atualizar'] )
    ->name('atualiza');

    //Rota para deletar movimentos
    Route::delete('/deletar/{id}', [indicacaoController::class, 'deletar'] )->name('deletar');



    // //rota indicacao-store
    // Route::post('/indicacao', [IndicacaoController::class, 'store'])->name('indicacao.store');



    // //rota indicao-show
    // Route::get('/indicacao/{id}', 'IndicacaoController@show')->name('indicacao.show');




});
