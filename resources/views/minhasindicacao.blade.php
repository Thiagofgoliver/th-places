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



@endsection