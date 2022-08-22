@extends('template.users')
@section('title', 'Editar usuário')
@section('body')
    <h1>Usuário {{ $user->name }}</h1>

    @if($errors->any())

        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all(); as $error)
                {{ $error }}<br>
            @endforeach
        </div>

    @endif

    <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Selecione uma Imagem</label>
            <input type="file" class="form-control form-control-md" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>

    </form>
@endsection
