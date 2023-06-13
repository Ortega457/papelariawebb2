@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>

<head>
    <title>Deletar Produto</title>
</head>

<body>
    <h1>Deletar Produto</h1>

    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <p>Você tem certeza que deseja deletar o produto "{{ $produto->nome }}"?</p>

        <div>
            <button type="submit">Deletar</button>
        </div>
    </form>

</body>

</html>
@endsection
