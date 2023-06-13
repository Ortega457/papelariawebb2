@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Criar Categoria</title>
</head>
<body>
    <h1>Criar Categoria</h1>
    
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        
        
        <div>
            <button type="submit">Criar</button>
        </div>
    </form>
</body>
</html>
@endsection