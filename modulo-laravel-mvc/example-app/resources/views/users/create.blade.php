@extends('template.users')
@section('title', 'Novo usuário')
@section('body')
    <h1>Novo usuário</h1>

    @if($errors->any())

        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all(); as $error)
                {{ $error }}<br>
            @endforeach
        </div>

    @endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control" aria-describedby="NNome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Selecione uma Imagem</label>
            <input type="file" class="form-control form-control-md" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
@endsection
