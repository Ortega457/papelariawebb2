@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center" >Lista de Produtos</h1>
        <html>
<head>
    <style>
        body {
            background-image: url("https://img.freepik.com/vetores-premium/fundo-claro-sujo-e-sujo-com-padrao-manchado-e-angustiado-vetor_186380-3391.jpg");
        }
    </style>
</head>
<body>

        <div class="row justify-content-center product-list" >
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
    </div>
@endsection