@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Deixe aqui sua mensagem</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form class="was-validated d-inline-block text-left" action="{{ route('papelaria.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control form-control-lg" id="nome" name="nome" required>
                <div class="invalid-feedback">
                    Por favor, digite seu nome.
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                <div class="invalid-feedback">
                    Por favor, digite um email válido.
                </div>
            </div>

            <div class="mb-3">
                <label for="texto">Mensagem:</label>
                <textarea class="form-control form-control-lg is-invalid" id="texto" name="texto" placeholder="Digite sua mensagem" required></textarea>
                <div class="invalid-feedback">
                    Por favor, digite uma mensagem.
                </div>
            </div>

            <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
        </form>
    </div>
@endsection
