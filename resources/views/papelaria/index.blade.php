@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center" style="background-color: #3490dc; color: #fff;">
        <h1 class="display-4">Promoções e Novos Produtos</h1>
        <p class="lead">Confira as últimas promoções e os novos produtos da Papelaria Papel Daora!</p>
    </div>

    <div class="row justify-content-center product-list">
        <div class="col-md-12">
            <form action="{{ route('papelaria.index') }}" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Pesquisar...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                    </div>
                </div>
            </form>
        </div>

        @foreach ($produtos as $produto)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ $produto->imagem }}" class="card-img-top" alt="Imagem do Produto">
                <div class="card-body" style="background-color: #f2f2f2;">
                    <h2 class="card-title">{{ $produto->nome }}</h2>
                    <p class="card-text"><strong>Categoria:</strong> {{ $produto->categoria->nome }}</p>
                    <p class="card-text"><strong>Valor:</strong> R$ {{ $produto->valor }}</p>
                    <p class="card-text"><strong>Descrição:</strong> {{ $produto->descricao }}</p>
                    <a href="{{ route('pedidos.create', ['produto_id' => $produto->id]) }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <footer class="mt-5" style="background-color: gray; color: white;">
    <div class="container text-center">
        <p>Endereço: Rua Principal, 123 - Cidade - Estado</p>
        <p>Telefone: (14) 1234-5678</p>
        <p>Email: exemplo@papelaria.com</p>
    </div>
</footer>
</div>
@endsection