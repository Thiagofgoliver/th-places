@extends('appprincipal')


@section('conteudo')





<nav class="navbar navbar-expand-sm navbar-light fundo-azul fixed-top">

    <a class="navbar-brand ms-2" href="#"><img src="images/logo-projeto.png " width="100"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <strong>Olá {{Auth()->user()->name}}</strong>
            </li>

            <li class="nav-item ">
                <a class="nav-link active" href="#" aria-current="page"><span
                        class="visually-hidden">(current)</span></a>
            </li>



            <!-- final botao indique local -->

            <li class="nav-item">


                <form method="POST" action="{{ route('principal') }}">
                    @csrf
                    <a class="nav-link text-light" href="{{ route('principal') }}" role="button">



                        <div class="">
                            <i class="fa-solid fa-arrow-rotate-left"></i>
                        </div>
                    </a>
                </form>

            </li>
        </ul>
    </div>
</nav>
<main class="mt-5 pt-5">



    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach($indicauser as $indicacao)
                    <div class="col">
                        <div class="card">
                            <div class="cor-docard ">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <strong>
                                            <h5 class="card-title texto-serviços">meus serviços</h5>
                                        </strong>
                                        <label for="exampleFormControlInput1" class="form-label"></label>
                                        <input type="text" readonly class="form-control" id="exampleFormControlInput1"
                                            placeholder="{{ $indicacao->nome }}" name="nome">
                                    </div>

                                    <!--tipo-->
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"></label>
                                        <input type="text" readonly name="tipo" class="form-control"
                                            id="exampleFormControlInput1" placeholder="{{ $indicacao->tipo }}">
                                    </div>

                                    <!--campo nome da rua-->
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"></label>
                                        <input type="text" readonly name="rua" class="form-control"
                                            id="exampleFormControlInput1" placeholder="{{ $indicacao->rua }}">
                                    </div>

                                    <!--campo bairro-->
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"></label>
                                        <input type="text" readonly name="bairro" class="form-control"
                                            id="exampleInputPassword1" placeholder="{{ $indicacao->bairro }}">
                                    </div>
                                    <!--final campo bairro-->

                                    <!-- lixeira -->
                                    <form method="POST" action="{{route('deletar', [$indicacao->id])}}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onClick="if(!confirm('Tem certeza que deseja excluir?')){return false}"
                                            class="btn btn-link mx-3"><i class="fa-regular fa-trash-can"></i></button>
                                    </form>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!-- editar -->
                                    <a href="{{route('editar',[$indicacao->id])}}"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                </div>


                            </div>

                        </div>
                    </div>


                    @endforeach
                </div>

            </div>
        </div>
    </div>
</main>

<footer class="p-5 mt-5 fundo-rodape-principal text-light ">
    <!-- roda pé do site mapa dentro do site -->
    <p>Siga-Me Nas Redes Sociais</p>
    <a href="https://github.com/Thiagofgoliver"><i class="fa-brands fa-github fa-2x"></i></a>
    <a href="https://encurtador.com.br/jBU15"> <i class="fa-brands fa-linkedin fa-2x"></i></a>
    <p>&copy; THIAGO FELIPE - Todos os direitos reservados</p>
</footer>

@endsection