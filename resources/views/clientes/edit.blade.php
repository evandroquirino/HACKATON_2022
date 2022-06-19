@extends('layouts.app')
@section('title', 'Editar Cliente')

@section('content')
    <h1 class="ml-3">Editar Cliente</h1>
    <form action="{{ route('cliente.update', $cliente) }}" method="POST" class="p-5">
    @csrf
        @method('PUT')
        <div class="md-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{ $cliente->nome }}" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
        </div>

        <div class="md-3">
            <label for="email" class="form-label">email</label>
            <input type="text" value="{{ $cliente->email }}" class="form-control" name="email" id="email" placeholder="Digite o email" required>
        </div>

        <div class="md-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" value="{{ $cliente->telefone }}" class="form-control" name="telefone" id="telefone" placeholder="Digite o telefone" required>
        </div>

        <div class="md-3">
            <label for="cpf" class="form-label">cpf</label>
            <input type="text" value="{{ $cliente->cpf }}" class="form-control" name="cpf" id="cpf" placeholder="Digite o cpf" required>
        </div>

        <div class="md-3">
            <label for="cidade" class="form-label">cidade</label>
            <input type="text" value="{{ $cliente->cidade }}" class="form-control" name="cidade" id="cidade" placeholder="Digite o cidade" required>
        </div>

        <div class="md-3">
            <label for="endereco" class="form-label">endereco</label>
            <input type="text" value="{{ $cliente->endereco }}" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereco" required>
        </div>

        <div class="md-3">
            <label for="bairro" class="form-label">bairro</label>
            <input type="text" value="{{ $cliente->bairro }}" class="form-control" name="bairro" id="bairro" placeholder="Digite o bairro" required>
        </div>

        <div class="md-3">
            <label for="numero" class="form-label">numero</label>
            <input type="text" value="{{ $cliente->numero }}" class="form-control" name="numero" id="numero" placeholder="Digite o numero" required>
        </div>

        <button class="btn btn-success">Editar</button>
    </form>
@endsection
