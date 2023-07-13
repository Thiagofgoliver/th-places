<?php

namespace App\Http\Controllers;

use App\Models\Indicacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// nao sei se é para usar
// use Illuminate\Support\Facades\Auth;

class IndicacaoController extends Controller
{    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $indicacoes = Indicacao::all();
        // return view('indicacaos.index', ['indicacaos' => $indicacaos]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Redirecionar ou retornar uma resposta adequada

        $indicacao = new Indicacao;
        $indicacao->nome = $request->nome;
        $indicacao->tipo = $request->tipo;
        $indicacao->rua = $request->rua;
        $indicacao->bairro = $request->bairro;
        $indicacao->cidade = $request->cidade;
        $indicacao->user_id = auth()->user()->id;
         $indicacao->save();
        return redirect('principal'); 
        // dd($indicacao);               
        
    }




    /**
     * Display the specified resource.
     */
    public function read(){
        $user = auth()->user()->id;
    
        // carrega as despesas na variavel
        //SELECT WHERE
    
        $indicacaos = Indicacao::where('cidade',Auth()->user()->cidade)->get();
        
    
        // carrega a view passando os dados consultados
    
        $dados = [
            'indicacaos'=> $indicacaos,

            
        ];
        return view('telaprincipal',$dados);

     
      }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Indicacao $indicacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Indicacao $indicacao ,$id)
    {
        //
    $indicacao = Indicacao::find($id);
    $indicacao->nome = $request->input('nome');
    $indicacao->tipo = $request->input('tipo');
    $indicacao->rua = $request->input('rua');
    $indicacao->bairro = $request->input('bairro');
    $indicacao->cidade = $request->input('cidade');
    $indicacao->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indicacao $indicacao,$id)
    {
        //

        $indicacao = Indicacao::find($id);
        $indicacao->delete();

    }
}
