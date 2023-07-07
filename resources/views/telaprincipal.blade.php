@extends('appprincipal')


@section('conteudo')
<nav class="navbar navbar-expand-sm navbar-light fundo-azul fixed-top">

      <a class="navbar-brand ms-2" href="#"><img src="images/logo-projeto.png " width="100"></a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a class="nav-link active" href="#" aria-current="page"><span class="visually-hidden">(current)</span></a>
          </li>

          <!-- inicio botao indique local -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
            Indique
          </button>
          <!-- final botao indique local -->

          <li class="nav-item">


            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
         this.closest('form').submit(); " role="button">
                <div class="">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </div>
              </a>
            </form>

          </li>
        </ul>
      </div>
    </nav>






<form action="/principal">
    @csrf
    <!--nome-->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nome" name="nome">
    </div>
    <!--final campo nome-->

    <!--campo tipo de serviço-->
    <select name="tipo" id="">
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
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome da Rua" >
    </div>

    <!--final campo nome da rua-->
    <!--campo bairro-->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bairro" >
    </div>
    <!--final campo bairro-->

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cidade" name="cidade">
    </div>

    <div class="modal-footer bottom">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>







@endsection