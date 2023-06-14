@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Deletar Produto</h1>
    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Você tem certeza que deseja deletar o produto "{{ $produto->nome }}"?</p>
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
            <div>
                <button type="submit" class="btn btn-danger">Deletar</button>
            </div>
        </div>
    </form>
</div>
@endsection
