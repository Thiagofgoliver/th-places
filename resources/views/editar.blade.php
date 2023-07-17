@extends('appprincipal')


@section('conteudo')




<form method="POST" action="{{route('atualiza')}}">
    @csrf
    @method('PUT')

    <!--nome-->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="text"  required name="nome" class="form-control"  id="nome" placeholder="nome" value="{{$indicacao->nome}}">
    </div>
    <!--final campo nome-->

    <!--campo tipo de serviço-->
    <select name="tipo" id="tipo">
        <option require>Auto eletrica</option>
        <option require>Borracharia</option>
        <option require>Oficina mecanica</option>
        <option require>Oficina suspensão</option>
        <option require>funilaria e pintura </option>
        <option require>Auto peças</option>
        <!-- final campo tipo de serviço-->
    </select>
    <!--final campo data de nascimento-->
    <!--campo nome da rua-->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="text" name="rua" class="form-control" id="exampleFormControlInput1" placeholder="Nome da Rua">
    </div>

    <!--final campo nome da rua-->
    <!--campo bairro-->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="text" name="bairro" class="form-control" id="exampleInputPassword1" placeholder="Bairro">
    </div>
    <!--final campo bairro-->

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cidade" name="cidade">
    </div>

    <div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>




</form>

@endsection