@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Criar Cliente</title>
</head>
<body>
    <h1>Criar Cliente</h1>
    
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        
        <div>
            <button type="submit">Criar</button>
        </div>
    </form>
</body>
</html>
@endsection