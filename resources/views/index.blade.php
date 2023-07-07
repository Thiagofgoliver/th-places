@foreach($indicacoes as $indicacao)
    <p>{{ $indicacao->nome }}, {{ $indicacao->tipo }}, {{ $indicacao->rua }}, {{ $indicacao->bairro }}, {{ $indicacao->cidade }}</p>
@endforeach
