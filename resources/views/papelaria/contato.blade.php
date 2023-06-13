@extends('layouts.app')

@section('content')
    <h1>Deixe aqui seu elogio ou reclamação</h1>

    <form action="{{ route('papelaria.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="texto">Mensagem:</label>
            <textarea id="texto" name="texto"></textarea>
        </div>

        <button type="submit">Enviar</button>
    </form>
@endsection
